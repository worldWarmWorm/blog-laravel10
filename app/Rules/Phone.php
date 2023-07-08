<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class Phone implements ValidationRule
{
	/**
	 * Run the validation rule.
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		preg_match("/^\+[0-9]{1}-[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $value, $matches);

		if (empty($matches)) {
			$fail(__('Неверный формат: :attribute'));
		}
	}
}
