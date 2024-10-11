
@include('layout.header')
    <!-- Hero Section -->

   <!-- //! halloween only --------------------------------------------------------------->
   <div id="halloween-splash">
    <span id="H">H</span>
    <span id="A">A</span>
    <span id="L">L</span>
    <span id="A">L</span>
    <span id="O">🎃</span>
    <span id="W">W</span>
    <span id="E">E</span>
    <span id="N">E</span>
    <span id="E">N</span>
    </div>

    {{-- <div id="halloween-splash">

        <!-- Background -->
        <div class="moon"></div>
        <div class="clouds cloud1">
            <div></div>
            <div></div>
        </div>
        <div class="clouds cloud2">
            <div></div>
            <div></div>
        </div>
        <div class="clouds cloud3">
            <div></div>
            <div></div>
        </div>
        <div class="clouds cloud4">
            <div></div>
            <div></div>
        </div>
        <div class="clouds cloud5">
            <div></div>
            <div></div>
        </div>

        <div class="smoke">
            <div></div>
        </div>

        <div class="tree tree1"></div>
        <div class="tree tree2"></div>
        <div class="tree tree3"></div>
        <div class="tree tree4"></div>
        <div class="tree tree5"></div>

        <!-- Lantern Garland -->
        <div class="dancing-line">

            <div class="pumpkin">
                <div class="stem"></div>
                <div class="heart"></div>
                <div class="rounded-eyes"></div>
                <div class="rounded-eyes"></div>
                <div class="mean-mouth"></div>
            </div>

            <div class="pumpkin">
                <div class="stem"></div>
                <div class="heart"></div>
                <div class="eye"></div>
                <div class="eye eye-right"></div>
                <div class="bb-mouth"></div>
            </div>

            <div class="pumpkin">
                <div class="stem"></div>
                <div class="heart"></div>
                <div class="rounded-eyes baby-eyes"></div>
                <div class="rounded-eyes baby-eyes"></div>
                <div class="mean-mouth"></div>
            </div>

            <div class="pumpkin">
                <div class="stem"></div>
                <div class="heart"></div>
                <div class="rounded-eyes"></div>
                <div class="rounded-eyes"></div>
                <div class="rounded-mouth"></div>
            </div>

            <div class="pumpkin">
                <div class="stem"></div>
                <div class="heart"></div>
                <div class="eye"></div>
                <div class="eye eye-right"></div>
                <div class="bb-mouth"></div>
            </div>

            <div class="pumpkin">
                <div class="stem"></div>
                <div class="heart"></div>
                <div class="rounded-eyes"></div>
                <div class="rounded-eyes"></div>
                <div class="mean-mouth"></div>
            </div>

            <div class="pumpkin">
                <div class="stem"></div>
                <div class="heart"></div>
                <div class="eye"></div>
                <div class="eye eye-right"></div>
                <div class="bb-mouth"></div>
            </div>

            <div class="pumpkin">
                <div class="stem"></div>
                <div class="heart"></div>
                <div class="rounded-eyes baby-eyes"></div>
                <div class="rounded-eyes baby-eyes"></div>
                <div class="mean-mouth"></div>
            </div>

        </div>
    </div> --}}

    <div id="main-content" style="display: none;">
   <!-- //! halloween only --------------------------------------------------------------->


        <div class="container-fluid text-white py-5 overflow-hidden" style="border-bottom-right-radius: 90px; background-color:#3c6fb1;">
            <div class="container overflow-hidden">
                <div class="row align-items-center">
                    <!-- Text Section -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h1 class="display-4 font-weight-bold" style="font-family: 'Raleway', sans-serif;">
                            Custom boxes made easy <span class="font-weight-bold" style="color: #175a5a;">for retail</span>
                        </h1>                              
                        <p class="lead">
                            Supercharge your brand through the power of custom boxes and custom packaging that's big on wow-factor. With low minimums, free design expertise, super-fast delivery, and unlimited customization.
                        </p>
                        <a class="btn btn-lg" 
                            style="background-color: #175a5a; color: #ffffff;"
                            onmouseover="this.style.backgroundColor='#0d3c3c'; this.style.color='#f9a171';" 
                            onmouseout="this.style.backgroundColor='#175a5a'; this.style.color='#ffffff';"
                            onclick="document.getElementById('custom-quote-form').scrollIntoView({behavior: 'smooth'});">
                                Get Free Quote
                        </a>
                    </div>
                    <!-- Image Section -->
                    <div class="col-md-6 text-center">
                        <img src="{{ URL('images/frontslider.png')}}" alt="Custom Boxes" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

   <!-- //! halloween only --------------------------------------------------------------->
    </div>

    <script>
        // Hide splash screen after 3 seconds
        setTimeout(function() {
            document.getElementById('halloween-splash').classList.add('fade-out');
            document.getElementById('main-content').style.display = 'block';
        }, 3000); // Change to desired duration (3000ms = 3 seconds)
    </script>
   <!-- //! halloween only --------------------------------------------------------------->

    

    <!-- Custom Rigid Boxes Section -->
    <section class="custom-rigid-boxes py-5">
        <div class="container">
            <h2 class="text-center mb-4" style="font-size: 40px;font-weight:bold;margin-top:25px">Your Custom Packaging Partner</h2>
            <div class="row">
                @if($categories->isEmpty())
                    <p></p>
                @else
                    @foreach($categories as $category)
                        <!-- Box 1 -->
                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <!-- Wrap the whole card in an anchor tag -->
                            <a href="{{ route('product.show', ['id' => $category->id]) }}" class="text-decoration-none">
                                <div class="card shadow-sm p-3 rounded-3 border-0 text-center" style="background-color: #f8fafc; cursor: pointer;">
                                    <img src="{{ $category->main_img }}" class="card-img-top mb-3" alt="Magnetic Closure Boxes" style="max-height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark fw-bold mb-3">{{ $category->title }}</h5>
                                        <p class="text-primary fw-bold">Learn More <span>&#8250;</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    @endforeach
                @endif    
                
                
            </div>
        </div>
    </section>
    
    
    
 

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @include('layout.footer')
