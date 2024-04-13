<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />

    <title>B7Store</title>
</head>

<body>
    <!-- Header -->
    <x-base.header />
    <!-- Header -->

    <main>
        <!-- Hero -->
        <x-hero />
        <!-- Hero -->

        <!-- Categories -->
        <livewire:categories-list />
        <!-- Categories -->

        <!-- Filtered Advertises -->
        <x-filtered-advertises />
        <!-- Filtered Advertises -->
    </main>

    <!-- Footer -->
    <x-base.footer />
    <!-- Footer -->
</body>

</html>
