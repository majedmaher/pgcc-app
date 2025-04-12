<div class="mt-100 w-100">
    <div class="card p-20">

        <h3>{{__('main.contact us')}}</h3>
        <div class="card m-10 p-50-100 md-p-20 shadow"> 
            
            <div class="mt-20" style="overflow-x:auto;">
                <table>
                  <tr>
                    <th>#</th>
                    <th>{{__('dashboard.name')}}</th>
                    <th>{{__('dashboard.phone number')}}</th>
                    <th>{{__('dashboard.email address')}}</th>
                    <th>{{__('main.subject')}}</th>
                    <th>{{__('main.message')}}</th>
                    <th>{{__('dashboard.actions')}}</th>
                  </tr>
                  @if(!empty($contacts) && $contacts->count())
                    @foreach($contacts as $key => $contact)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone_number }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <div class="actions">
                                    <button wire:click='deleteItem({{$contact->id}})' wire:confirm='{{__('dashboard.confirmation message')}}' class="btn btn-danger">Delete</button>
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
                @if ($contacts->links()->paginator->hasPages())
                    <div class="mt-4 p-4 d-flex flex-justify-between">
                        {{ $contacts->onEachSide(1)->links('layouts.paginate') }}
                    </div>
                @endif
              </div>
        </div>
    </div>
</div>
