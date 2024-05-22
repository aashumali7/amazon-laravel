<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amazon</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    </head>
    <body class="container-fluid">
     <h1>Amazon.in</h1>
     <x-button  title="Amazon Mini TV" />
     @component('components.button',['title'=>'Sell'])
     @endcomponent
     <x-button  title="Best Sellers" />
     <x-button  title="Mobiles" />
     @component('components.button', ['title' => 'Today\'s Deals'])
     @endcomponent
     <x-button  title="Electronic" />
     @component('components.button', ['title' => 'Prime'])
     @endcomponent
     <x-button  title="Customer Service" />
     @component('components.button', ['title' => "Fashion"])
     @endcomponent
     <x-button  title='Home&Kitchen' />
     @component('components.button', ['title' => "New Releases"])
     @endcomponent
     <x-button  title='AmazonPay' />
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>