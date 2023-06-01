
        <div class="ml-1">
            <h4 class="contact-us__header card-title">{{__('pages/client/contact.leave-message')}}</h4>
            <form wire:submit.prevent="submitForm">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="form-name">{{__('pages/client/contact.your-name')}}</label>
                        <input wire:model="name" type="text" id="form-name" class="form-control" placeholder="{{__('pages/client/contact.your-name')}}">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="form-email">{{__('pages/client/contact.email')}}</label>
                        <input wire:model="email" type="email" id="form-email" class="form-control" placeholder="{{__('pages/client/contact.email-placeholder')}}">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="form-subject">{{__('pages/client/contact.subject')}}</label>
                    <input wire:model="subject" type="text" id="form-subject" class="form-control" placeholder="{{__('pages/client/contact.subject-placeholder')}}">
                    @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="form-message">{{__('pages/client/contact.message')}}</label>
                    <textarea wire:model="message" id="form-message" class="form-control" rows="4"></textarea>
                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{__('pages/client/contact.send-message')}}</button>
                
    
</div>

