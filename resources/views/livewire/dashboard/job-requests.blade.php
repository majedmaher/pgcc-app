<div class="mt-100 w-100">
    <div class="card p-20">

        <h3>{{__('main.all jobs')}}</h3>
        <div class="card m-10 p-50-100 md-p-20 shadow"> 
            
            <div class="mt-20" style="overflow-x:auto;">
                <table>
                  <tr>
                    <th>#</th>
                    <th>{{__('dashboard.name')}}</th>
                    <th>{{__('dashboard.phone number')}}</th>
                    <th>{{__('dashboard.email address')}}</th>
                    <th>{{__('main.cv')}}</th>
                    <th>{{__('main.message')}}</th>
                    <th>{{__('dashboard.actions')}}</th>
                  </tr>
                  @if(!empty($job_requests) && $job_requests->count())
                    @foreach($job_requests as $key => $job_request)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $job_request->name }}</td>
                            <td>{{ $job_request->phone_number }}</td>
                            <td>{{ $job_request->email }}</td>
                            <td><a href="{{ asset($job_request->cv) }}" target="_blank" rel="noopener noreferrer">{{__('main.cv')}}</a></td>
                            <td>{{ $job_request->message }}</td>
                            <td>
                                <div class="actions">
                                    <button wire:click='deleteItem({{$job_request->id}})' wire:confirm='{{__('dashboard.confirmation message')}}' class="btn btn-danger">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <td colspan="10">{{__('dashboard.no data')}}</td>
                        </tr>
                    @endif
                </table>
                @if ($job_requests->links()->paginator->hasPages())
                    <div class="mt-4 p-4 d-flex flex-justify-between">
                        {{ $job_requests->onEachSide(1)->links('layouts.paginate') }}
                    </div>
                @endif
              </div>
        </div>
    </div>
</div>
