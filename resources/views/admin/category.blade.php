<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="{{ URL('images/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Bootstrap JS (for dismissing alerts) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <div class="app-container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <h3>Admin Panel</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('admin.dashboard')}}"><i class="fas fa-home"></i> Dashboard</a></li>
                <li style="font-weight: bolder;"><a href="{{ route('admin.categoty')}}" style="color: rgb(242, 210, 52);"><i class="fas fa-table"></i> Categories</a></li>
                <li><a href="{{ route('admin.product')}}"><i class="fas fa-tasks"></i> Product</a></li>
                <li><a href="{{ route('admin.blogpage')}}"><i class="fas fa-blog"></i>Blog</a></li>
                <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="#"><i class="fas fa-cogs"></i> Settings</a></li>
                <li><a href="{{route('admin.logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content" id="main-content">
            <div id="app-container">
                <!-- Dashboard Stats -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <!-- Active Users Table -->
                <div id="table-container">
                    <header class="table-header">
                        <h3>Categories</h3>
                        <div id="filter-buttons">
                            <a href="{{ route('create.category')}}">
                            <button class="filter-btn">Add Category</button>
                            </a>
                        </div>
                    </header>
                    <table id="users-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tilte</th>
                                <th>Navbar</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                @if($category->nav_id == 1)
                                    <td>Boxes by Industry</td>
                                @elseif ($category->nav_id == 2)
                                    <td>Boxes by Material</td>
                                @else ($category->nav_id == 3)
                                    <td>Boxes by Style</td>
                                @endif
                                <td>
                                    <form action="{{ route('category.toggle-status', $category->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="status {{$category->status == 'active' ? 'active' : 'inactive'}}">
                                            {{$category->status == 'active' ? 'Active' : 'Inactive'}}
                                        </button>
                                    </form>
                                </td>

                                {{-- <td><button class="btn-details">Delete</button><button class="btn-details" style="margin-left: 10px">Edit</button></td> --}}
                                <td>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE') <!-- This will allow us to specify the DELETE method -->
                                        <button type="submit" class="btn-details" style="margin-left: 10px; background-color: #df4b30; color: white;">Delete</button>
                                    </form>
                                    {{-- <a href="" class="btn-details" style="margin-left: 10px; background-color: #4CAF50; color: white;">Edit</a> --}}
                                    <a href="{{ route('edit.category', $category->id) }}" class="btn-details" style="margin-left: 10px; background-color: #4CAF50; color: white;">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    {{-- <script>
        // Detect when the window is being closed or refreshed
        window.addEventListener("beforeunload", function (event) {
            // Make an AJAX request to log out
            navigator.sendBeacon("{{ route('admin.logout') }}");
        });
    </script> --}}
    <script>
        window.addEventListener("beforeunload", function (event) {
            if (!window.sessionStorage.getItem('stayOnPage')) {
                fetch("{{ route('admin.logout') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({})
                });
            }
        });
    
        window.addEventListener("DOMContentLoaded", function () {
            window.sessionStorage.setItem('stayOnPage', true);
    
            // If the user navigates away, we remove the session key
            window.addEventListener("unload", function () {
                window.sessionStorage.removeItem('stayOnPage');
            });
        });
    </script>
    
    
</body>
</html>
