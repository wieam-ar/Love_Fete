<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/stylle.css">
    <title>Love Fete</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><img src="./pics/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">about</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#services">services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#impact">impact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#testimonials">testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- Section 1 -->
    <section id="section1" class="mt-2" style="height:100vh; ">
        <div class="container  ">
            <img src="" alt="">
            <video autoplay muted loop class="hero-section" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: -1; border-radius: 20px;">
                <source src="./pics/204803-925552205_tiny.mp4" type="video/mp4">
            </video>

            <div class="row justify-content-center ">
                <div class="col-md-10 col-sm-12 centrehero mt-2 mx-auto">

                    <h1 class="hero-title" style="font-size: 3rem; margin-top: 15%;">Rencontre des voyageurs.</h1>
                    <p class="hero-subtitle">Choisir où te loger et on te montrera avec qui !</p>

                </div>

            </div>
        </div>

    </section>
    <section id="events">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image">
                    <img src="./pics/evets.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <div class="about">
                        <h2 class="abouttitle">About Love Fête</h2>
                        <p class="aboutparag">
                            I'm [Your Name], a passionate event planner with a purpose. My goal goes beyond creating temporary joy...

                            A portion of my income is dedicated to supporting orphans and elderly homes. Each celebration with us contributes to putting a smile on forgotten faces.
                        </p>
                    </div>
                    <div class="flex items-center mt-8">
                        <div class="bg-pink-100 rounded-full p-3 mr-4">
                            <i class="fas fa-heart text-pink-600 text-xl"></i>
                        </div>
                        <p class="text-gray-700 font-medium">Every event creates a ripple of happiness</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row s">
                <div class="col-md-4">
                    <!-- Wedding Service -->
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1517825738774-7de9363ef735?auto=format&fit=crop&w=600&q=80" class="card-image" alt="Wedding Planning Service">
                        <div class="card-body">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-ring"></i>
                                </div>
                                <h3 class="service-title">Weddings</h3>
                            </div>
                            <p class="service-description">Create your dream wedding with expert planning and elegant coordination tailored to your unique vision.</p>
                        </div>
                        <div class="card-footer">
                            <span class="price">Starting from $2,500</span>
                            <button class="learn-more-btn" aria-label="Learn more about wedding services">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <!-- Birthday Service -->
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1513151233558-d860c5398176?auto=format&fit=crop&w=600&q=80" class="card-image" alt="Birthday Party Planning">
                        <div class="card-body">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-birthday-cake"></i>
                                </div>
                                <h3 class="service-title">Birthday Parties</h3>
                            </div>
                            <p class="service-description">Memorable themes and joy for all ages with vibrant celebrations that create lasting memories.</p>
                        </div>
                        <div class="card-footer">
                            <span class="price">Starting from $500</span>
                            <button class="learn-more-btn" aria-label="Learn more about birthday party services">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <!-- Graduation Service -->
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1599943821034-8cb5c7526922?q=80&w=459&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-image" alt="Graduation Event Planning">
                        <div class="card-body">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h3 class="service-title">Graduation Events</h3>
                            </div>
                            <p class="service-description">Celebrate milestones in a stylish and meaningful way that honors your achievements.</p>
                        </div>
                        <div class="card-footer">
                            <span class="price">Starting from $800</span>
                            <button class="learn-more-btn" aria-label="Learn more about graduation event services">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- Buffet Service -->
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=600&q=80" class="card-image" alt="Buffet and Decoration Services">
                        <div class="card-body">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-utensils"></i>
                                </div>
                                <h3 class="service-title">Buffets & Decoration</h3>
                            </div>
                            <p class="service-description">Delicious catering and stunning décor to enhance your event with exceptional taste and style.</p>
                        </div>
                        <div class="card-footer">
                            <span class="price">Starting from $300</span>
                            <button class="learn-more-btn" aria-label="Learn more about buffet and decoration services">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Graduation Service -->
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1599943821034-8cb5c7526922?q=80&w=459&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-image" alt="Graduation Event Planning">
                        <div class="card-body">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h3 class="service-title">Graduation Events</h3>
                            </div>
                            <p class="service-description">Celebrate milestones in a stylish and meaningful way that honors your achievements.</p>
                        </div>
                        <div class="card-footer">
                            <span class="price">Starting from $800</span>
                            <button class="learn-more-btn" aria-label="Learn more about graduation event services">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectio4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-content">
                        <h2 class="section-title">
                            Your Joy Creates <span class="highlight-text">Good</span>
                        </h2>
                        <p class="description">
                            Let your celebration leave a bigger impact <span class="emoji">🌸</span>
                        </p>
                        <p class="description">
                            With every booking, you take part in doing good. Each month, a portion of our profit is used to buy essentials and donate to orphanages and elderly homes.
                        </p>
                        <p class="description">
                            We also organize monthly humanitarian visits <span class="emoji">❤️</span>
                        </p>
                        <div class="tags-container">
                            <div class="tag">
                                <i class="fas fa-child"></i>
                                <span>Orphan Support</span>
                            </div>
                            <div class="tag">
                                <i class="fas fa-hands-helping"></i>
                                <span>Elderly Care</span>
                            </div>
                            <div class="tag">
                                <i class="fas fa-heartbeat"></i>
                                <span>Monthly Visits</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="images-grid">
                        <div class="image-item">
                            <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8SGVscGluZyUyMEhhbmRzfGVufDB8fDB8fHww" alt="Helping Hands">
                        </div>
                        <div class="image-item">
                            <img src="./pics/evets.jpg" alt="Community Support">
                        </div>
                        <div class="image-item">
                            <img src="https://images.unsplash.com/photo-1549060279-7e168fcee0c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Food Donation">
                        </div>
                        <div class="image-item">
                            <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Happy Children">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="sectio5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">What Our Clients Say</h2>
                </div>
            </div>
           
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>