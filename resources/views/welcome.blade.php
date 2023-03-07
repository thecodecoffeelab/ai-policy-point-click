<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open AI</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      extend: {},
  }},
  plugins: [
      require('@tailwindcss/forms'),
  ],
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @tailwind base;
@tailwind components;
@tailwind utilities;

@media screen and (min-width: 768px) {
    form {
        display:-moz-inline-grid;
        flex-wrap: wrap;
        justify-content:left;
    }
 
    form div {
        width: 50%;
    }
 
    /* replace "1" with the number of the first field that you want to align horizontally on 3 columns */
    .form>*:nth-child(1),
    /* replace "2" with the number of the second field that you want to align horizontally on 3 columns */
    .form>*:nth-child(2),
    /* replace "3" with the number of the third field that you want to align horizontally on 3 columns */
    .form>*:nth-child(3){
        width: 32%;
    }
}
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
</head>
<body class="container mx-auto">
    @yield('content')
</body>
</html>