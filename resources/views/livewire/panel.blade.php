<div class=" min-h-screen">
    <nav wire:ignore class="sidebar-navigation fixed top-16 left-0">
        <ul>
            <li wire:click="$set('vista',1)" class="active">
                <i class="bi bi-person-circle"></i>
                <span class="tooltip">Usuarios</span>
            </li>
            <li wire:click="$set('vista',2)">
                <i class="bi bi-hdd"></i>
                <span class="tooltip">Devices</span>
            </li>
            <li wire:click="$set('vista',3)">
                <i class="bi bi-newspaper"></i>
                <span class="tooltip">Contacts</span>
            </li>
            <li wire:click="$set('vista',4)">
                <i class="bi bi-printer"></i>
                <span class="tooltip">Fax</span>
            </li>
            <li wire:click="$set('vista',5)">
                <i class="bi bi-sliders"></i>
                <span class="tooltip">Settings</span>
            </li>
        </ul>
    </nav>
    <div class="w-full pl-20 ">
        <div class=" pt-10 pl-10 h-full">
            @switch($vista)
                @case(1)
                    @livewire('control.gestionusuario')
                @break

                @case(2)
                    caso dos
                @break

                @case(3)
                    caso 3
                @break

                @case(4)
                    caso 4
                @break

                @case(5)
                    caso 5
                @break-
            @endswitch
        </div>


    </div>
</div>
