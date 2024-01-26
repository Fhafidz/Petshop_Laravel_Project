@extends('layouts.navbar')

@section('container')

<link rel="stylesheet" href="css/home.css">
    <div class="main">
        <div class="text">
            <h1>
                Love Your Pets <br> Like your Pets does
            </h1>
            <p class="centered-text">
                We help you to love your Pets by providing 
                food, snacks, vitamins, and other Pets needs
            </p>
        </div>

        <!-- Konten pertama dengan tulisan di tengah -->
        <div class="additional-content content1">
            <div class="additional-images">
                <img src="images/content1.png" alt="content4">
            </div>
            <div class="additional-text">
                <p class="centered-text">
                    Welcome to our premium pet food selection tailored for both dogs and cats! 
                    Our meticulously crafted recipes, including savory dry kibble and irresistible wet options, cater to dogs of all breeds and sizes, 
                    providing essential nutrients, high-quality proteins, and vital minerals for their overall health and vitality. 
                </p>
            </div>
        </div>

        <!-- Konten kedua dengan gambar di sebelah kanan -->
        <div class="additional-content content2">
            <div class="additional-images">
                <img src="images/content2.png" alt="content4">
            </div>
            <div class="additional-text">
                <p>
                    Vitamins for cats and dogs play a crucial role in maintaining their overall health and vitality. 
                    Our specialized range of pet vitamins is thoughtfully formulated to cater specifically to the unique nutritional needs of your feline and canine companions. 
                </p>
            </div>
        </div>

        <!-- Konten ketiga dengan gambar di sebelah kiri -->
        <div class="additional-content content3">
            <div class="additional-text">
                <p>
                    Welcome to our comprehensive collection of supplies designed to cater to the needs of your beloved cats and dogs! 
                    Our range of pet accessories encompasses everything your furry friends may require for their comfort, health, and entertainment. 
                    From cozy beds, plush blankets, and durable crates to stylish collars, leashes, and harnesses, we provide top-quality products to ensure your pets feel safe and secure.
                </p>
            </div>
            <div class="additional-images">
                <img src="images/content3.png" alt="content5">
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2024 HaloPets. All rights reserved.</p>
    </footer>

@endsection
