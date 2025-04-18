<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Todo List</title>
  <script src="https://unpkg.com/lucide@latest"></script>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6 font-sans">

  <div class="max-w-4xl mx-auto bg-white shadow-2xl rounded-2xl overflow-hidden">
    <div class="flex items-center justify-between bg-gray-800 text-white px-6 py-4">
      <h1 class="text-xl font-semibold">📚 Daftar Todo-List</h1>
      <div class="flex gap-2">
        <i data-lucide="book-open" class="w-6 h-6"></i>
        <i data-lucide="search" class="w-6 h-6"></i>
        <i data-lucide="library" class="w-6 h-6"></i>
      </div>
    </div>
    <div class="overflow-x-auto">
      <table class="min-w-full text-left text-gray-700">
        <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
          <tr>
            <th class="py-3 px-6">Judul</th>
            <th class="py-3 px-6">Deskripsi</th>
            <th class="py-3 px-6">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-800 text-sm divide-y divide-gray-200">
        
        </tbody>
      </table>
    

  <script>
    lucide.createIcons();
  </script>
</body>
</html>