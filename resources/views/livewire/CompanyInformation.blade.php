
    <div>
        <!-- Afficher un message flash en cas de succès -->
        @if (session()->has('message'))
            <div>{{ session('message') }}</div>
        @endif
    
        <!-- Afficher le formulaire de l'entreprise -->
        <form wire:submit.prevent="save">
            <div>
                <label for="twitter">Twitter:</label>
                <input type="text" wire:model="twitter">
                @error('twitter') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="facebook">Facebook:</label>
                <input type="text" wire:model="facebook">
                @error('facebook') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="instagram">Instagram:</label>
                <input type="text" wire:model="instagram">
                @error('instagram') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="website">Site Web:</label>
                <input type="text" wire:model="website">
                @error('website') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="openingHours">Heures d'ouverture:</label>
                <input type="text" wire:model="openingHours">
                @error('openingHours') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="description">Description:</label>
                <textarea wire:model="description"></textarea>
                @error('description') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="phoneNumber">Numéro de téléphone:</label>
                <input type="text" wire:model="phoneNumber">
                @error('phoneNumber') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="address">Adresse:</label>
                <input type="text" wire:model="address">
                @error('address') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="email">Email:</label>
                <input type="email" wire:model="email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <button type="submit">Enregistrer</button>
            </div>
        </form>
    </div>
    
    
