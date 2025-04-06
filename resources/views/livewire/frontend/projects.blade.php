<div>
    <div id="projects" class="projects d-flex flex-column gap-50 position-relative w-100 container border-box my-20 bg-section align-items-center">
        <div class="projects-title">
            <h2>{{__('main.projects')}}</h2>
        </div>
        <div class="projects-content d-grid grid-template-3 grid-gap-30 text-center">
            @if(!empty($projects) && $projects->count())
                @foreach($projects as $key => $project)
                <div class="project-item transition-duration-500 cursor-pointer shadow-hover rounded pb-10">
                    <div class="project-item-image">
                        <img class="rounded" height="50px" src="{{asset($project->image)}}" alt="{{$project->title}}">
                    </div>
                    <div class="project-item-title">
                        <h3>{{$project->title}}</h3>
                    </div>
                    <div class="project-item-description">
                        <h4>{{$project->description}}</h4>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <div class="project-footer">
            @if ($projects->links()->paginator->hasPages())
                <div class="mt-4 p-4 d-flex flex-justify-between">
                    {{ $projects->onEachSide(1)->links('layouts.paginate') }}
                </div>
            @endif
        </div>
    </div>
</div>


@push('seo')
<meta name="description" content="{{isset($settings->description) ?? $settings->description}}">
<meta name="keywords" content="{{isset($settings->keywords) ?? $settings->keywords}}">
<meta name="author" content="Majed Maher">
<link rel="shortcut icon" type="x-icon" href="{{asset($settings->logo)}}">
<link rel="canonical" href="{{ url()->current() }}" />

{{-- <link rel="stylesheet" href="{{asset('assets/frontend/style.min.css')}}" /> --}}
<link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}" />
<link rel="stylesheet" media="(max-width: 768px)" href="{{asset('assets/frontend/responsive.css')}}">
<title>{{isset($settings->title) ? $settings->title : "PGCC Company"}}</title>
<link rel="apple-touch-icon" href="{{asset($settings->logo)}}">
@endpush
