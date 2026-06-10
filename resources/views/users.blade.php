<!DOCTYPE html>
<html>
<head>
    <title>Users Page</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        /* Navbar */
        .navbar{
            background: white;
            padding: 18px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .logo{
            font-size: 28px;
            font-weight: bold;
            color: #2563eb;
        }

        .nav-links{
            display: flex;
            gap: 30px;
        }

        .nav-links a{
            text-decoration: none;
            color: #374151;
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-links a:hover{
            color: #2563eb;
        }

        .btn{
            background: #2563eb;
            color: white;
            padding: 10px 22px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover{
            background: #1d4ed8;
        }

        /* Page Header */
        .page-header{
            text-align: center;
            padding: 70px 20px 40px;
        }

        .page-header h1{
            font-size: 48px;
            color: #111827;
            margin-bottom: 15px;
        }

        .page-header p{
            font-size: 18px;
            color: #6b7280;
        }

        /* User Section */
        .container{
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding-bottom: 60px;
        }

        .top-bar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .search-box input{
            padding: 12px 18px;
            width: 280px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
        }

        .add-user-btn{
            background: #2563eb;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            transition: 0.3s;
        }

        .add-user-btn:hover{
            background: #1e40af;
        }

        /* User Cards */
        .user-grid{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .user-card{
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .user-card:hover{
            transform: translateY(-5px);
        }

        .user-avatar{
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .user-card h3{
            margin-bottom: 8px;
            color: #111827;
        }

        .user-card p{
            color: #6b7280;
            margin-bottom: 8px;
            font-size: 15px;
        }

        .card-buttons{
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        .edit-btn,
        .delete-btn{
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
        }

        .edit-btn{
            background: #2563eb;
            color: white;
        }

        .delete-btn{
            background: #ef4444;
            color: white;
        }

    </style>

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">

        <div class="logo">
            MyLaravel
        </div>

        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/users">Users</a>
            <a href="/customers">Customers</a>
        </div>

        <a href="#" class="btn">Login</a>

    </nav>

    <!-- Header -->
    <section class="page-header">

        <h1>Users Information</h1>
        <p>Manage your users with a modern Laravel dashboard.</p>

    </section>

    <!-- Users Section -->
    <div class="container">

        <!-- Top Bar -->
        <div class="top-bar">

            <div class="search-box">
                <input type="text" placeholder="Search users...">
            </div>

            <button class="add-user-btn">
                + Add User
            </button>

        </div>

        <!-- User Cards -->
        <div class="user-grid">

            <!-- Card 1 -->
            <div class="user-card">

                <div class="user-avatar">
                    R
                </div>

                <h3>Rathana Sokha</h3>

                <p>Email: rathana@gmail.com</p>

                <p>Role: Admin</p>

                <div class="card-buttons">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </div>

            </div>

            <!-- Card 2 -->
            <div class="user-card">

                <div class="user-avatar">
                    J
                </div>

                <h3>John Doe</h3>

                <p>Email: john@gmail.com</p>

                <p>Role: Teacher</p>

                <div class="card-buttons">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </div>

            </div>

            <!-- Card 3 -->
            <div class="user-card">

                <div class="user-avatar">
                    S
                </div>

                <h3>Sarah Smith</h3>

                <p>Email: sarah@gmail.com</p>

                <p>Role: Student</p>

                <div class="card-buttons">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </div>

            </div>

        </div>

    </div>

</body>
</html>