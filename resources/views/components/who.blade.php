@if (Auth::guard('web')->check())
    <p class="text-success">
        You Logged In as <strong>User</strong>
    </p>
    @else
    <p class="text-danger">
        You Logged Out as <strong>User</strong>
    </p>
@endif

@if (Auth::guard('admin')->check())
    <p class="text-success">
        You Logged In as <strong>Admin</strong>
    </p>
    @else
    <p class="text-danger">
        You Logged Out as <strong>Admin</strong>
    </p>
@endif