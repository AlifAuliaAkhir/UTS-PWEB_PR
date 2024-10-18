<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
 <div class="min-h-screen bg-gray-50/50">
  @include('admin.layouts.sidebar')
  <div class="p-4 xl:ml-80">
    @include('admin.layouts.navbar')
    <div class="mt-12">
      @yield('content')
      
     
    </div>
    
  </div>
</div>
</body>
</html>
