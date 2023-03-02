{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-globe"></i> Translations</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('language') }}"><i class="nav-icon la la-flag-checkered"></i> Languages</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('language/texts') }}"><i class="nav-icon la la-language"></i> Site texts</a></li>
    </ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('slide') }}"><i class="nav-icon la la-question"></i> Slides</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('about') }}"><i class="nav-icon la la-question"></i> Abouts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('why') }}"><i class="nav-icon la la-question"></i> Whies</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('service') }}"><i class="nav-icon la la-question"></i> Services</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('microservice') }}"><i class="nav-icon la la-question"></i> Microservices</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact') }}"><i class="nav-icon la la-question"></i> Contacts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-request') }}"><i class="nav-icon la la-question"></i> Contact requests</a></li>
<li class="nav-item"><a class="nav-link" href="https://fontawesome.com/v5/search" target="_blank"><i class="nav-icon la la-question"></i> Icons List</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('team') }}"><i class="nav-icon la la-question"></i> Teams</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('member') }}"><i class="nav-icon la la-question"></i> Members</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('mailing-list') }}"><i class="nav-icon la la-question"></i> Mailing lists</a></li>