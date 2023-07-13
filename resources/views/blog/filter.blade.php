<x-form action="{{ route('blog') }}">
	<div class="row">
		<div class="col-12 col-md-4">
			<x-label>
				🔎
			</x-label>
			<x-input name="search" placeholder="{{ __('Поиск') }}" value="{{ request('search') }}" />
		</div>
		<div class="col-12 col-md-4">
			<div class="mb-3">
				<x-label>
					{{ __('Дата начала') }}
				</x-label>
				<x-input type="date" name="from_date" value="{{ request('from_date') }}" />
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="mb-3">
				<x-label>
					{{ __('Дата окончания') }}
				</x-label>
				<x-input type="date" name="to_date" value="{{ request('to_date') }}" />
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="mb-3">
				<x-button type="submit" class="w-100">
					{{ __('Искать') }}
				</x-button>
			</div>
		</div>
	</div>
</x-form>
