<section class="container forms">
    <div class="form login">
        <div class="form-content">
            <header>Login</header>
            @if (!empty($alertData))
                <div class="alert alert-{{ $alertData['type'] }} text-success" role="alert">
                    {{ $alertData['message'] }}
                </div>
            @endif
            <form wire:submit.prevent="createNewUser" action="#">
                <div class="field input-field">
                    <input wire:model="user_fname" type="text" placeholder="Name" class="input" required>
                </div>
                <div class="field input-field">
                    <input wire:model="user_email" type="email" placeholder="Email" class="input" required>
                </div>
                <div class="field input-field">
                    <input wire:model="user_password" type="password" placeholder="Password" class="password" required>
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field button-field">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</section>
