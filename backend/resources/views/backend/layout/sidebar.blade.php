<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rocker</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="index.html" class="">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        @can('product-menu')
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i></div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                @can('product-list')
                <li>
                    <a href="{{ route('products.index') }}"><i class='bx bx-radio-circle'></i>All Product</a>
                </li>
                @endcan
                @can('product-create')
                <li>
                    <a href="{{ route('products.create') }}"><i class='bx bx-radio-circle'></i>Create Product</a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        <li class="menu-label">Pages</li>
        @can('role-menu')
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Role and Permission</div>
            </a>
            <ul>
                @can('role-list')
                <li>
                    <a href="{{ route('roles.index') }}"><i class='bx bx-radio-circle'></i>All Roles</a>
                </li>
                @endcan
                @can('role-create')
                <li>
                    <a href="{{ route('roles.create') }}"><i class='bx bx-radio-circle'></i>Create Role</a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        @can('user-menu')
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
            <ul>
                @can('user-list')
                <li>
                    <a href="{{ route('users.index') }}"><i class='bx bx-radio-circle'></i>All Users</a>
                </li>
                @endcan
                @can('user-create')
                <li>
                    <a href="{{ route('users.create') }}"><i class='bx bx-radio-circle'></i>Create User</a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        <li class="menu-label">Forms & Tables</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                </div>
                <div class="menu-title">Forms</div>
            </a>
            <ul>
                <li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Form Elements</a>
                </li>
                <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Input Groups</a>
                </li>
                <li> <a href="form-radios-and-checkboxes.html"><i class='bx bx-radio-circle'></i>Radios &
                        Checkboxes</a>
                </li>
                <li> <a href="form-layouts.html"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
                </li>
                <li> <a href="form-validations.html"><i class='bx bx-radio-circle'></i>Form Validation</a>
                </li>
                <li> <a href="form-wizard.html"><i class='bx bx-radio-circle'></i>Form Wizard</a>
                </li>
                <li> <a href="form-text-editor.html"><i class='bx bx-radio-circle'></i>Text Editor</a>
                </li>
                <li> <a href="form-file-upload.html"><i class='bx bx-radio-circle'></i>File Upload</a>
                </li>
                <li> <a href="form-date-time-pickes.html"><i class='bx bx-radio-circle'></i>Date Pickers</a>
                </li>
                <li> <a href="form-select2.html"><i class='bx bx-radio-circle'></i>Select2</a>
                </li>
                <li> <a href="form-repeater.html"><i class='bx bx-radio-circle'></i>Form Repeater</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                </div>
                <div class="menu-title">Tables</div>
            </a>
            <ul>
                <li> <a href="table-basic-table.html"><i class='bx bx-radio-circle'></i>Basic Table</a>
                </li>
                <li> <a href="table-datatable.html"><i class='bx bx-radio-circle'></i>Data Table</a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
