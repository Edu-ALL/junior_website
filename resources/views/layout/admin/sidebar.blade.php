<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}" href="/admin/dashboard">
                <i class="fa-solid fa-house"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-heading">Menu</li>
        <li class="nav-item d-none">
            <a class="nav-link collapsed {{ request()->is('admin/banner*') ? 'active' : '' }}" href="/admin/banner">
                <i class="fa-solid fa-images"></i>
                <span>Banner</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ request()->is('admin/blog-category*') ? 'active' : '' }}" href="/admin/blog-category">
                <i class="fa-solid fa-gears"></i>
                <span>Blog Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ request()->is('admin/blogs*') ? 'active' : '' }}" href="/admin/blogs">
                <i class="fa-solid fa-newspaper"></i>
                <span>Blogs</span>
            </a>
        </li>
        <li class="nav-item d-none">
            <a class="nav-link collapsed {{ request()->is('admin/upcoming-event*') ? 'active' : '' }}" href="/admin/upcoming-event">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Upcoming Event</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ request()->is('admin/testimonial*') ? 'active' : '' }}" href="/admin/testimonial">
                <i class="fa-regular fa-comments"></i>
                <span>Testimonial</span>
            </a>
        </li>
        <li class="nav-heading">System</li>
        <li class="nav-item">
            <a class="nav-link collapsed" type="button" data-bs-toggle="modal" data-bs-target="#logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span> 
            </a>
        </li>
    </ul>
</aside>

{{-- Modal Logout --}}
<div class="modal fade" id="logout" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header">
                <div class="col d-flex gap-2 align-items-center">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h6 class="modal-title ms-3">Logout</h6>
                </div>
                {{-- <div type="button" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-regular fa-circle-xmark"></i>
                </div> --}}
            </div>
            <div class="modal-body text-center mt-3 mb-1">
                <p>Are you sure, you want to logout?</p>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                <button type="submit" style="font-size: 13px" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <form action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="font-size: 13px">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>