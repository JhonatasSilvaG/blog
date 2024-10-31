<main class="flex-grow-1">
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                <div id="carouselNotices" class="carousel slide" data-bs-ride="carousel"
                    data-bs-interval="4000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselNotices" data-bs-slide-to="0"
                            class="active"></button>
                        <button type="button" data-bs-target="#carouselNotices" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#carouselNotices" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/001.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/002.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/003.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselNotices"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselNotices"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <h2 class="text-center bg-light">Last Notices</h2>
                <div class="list-group list-group list-group-flush">
                    <?php foreach($allNews as $news): ?>
                        <a href="/notice?id=<?= $news['id'] ?>" class="list-group-item mb-3" id="<?= $news['id'] ?>">
                            <div class="d-flex w-100">
                                <h5 class="mb-2"><?= $news['title'] ?></h5>
                            </div>
                            <p class="mb-3 truncar-3l"><?= $news['text'] ?></p>
                            <small><?= $news['date'] ?></small>
                            <div>
                                <span class="badge text-bg-primary"><?= $news['topic'] ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-12 pt-4">
                <h2 class="text-center">Economies</h2>
                <hr>
                <div class="list-group list-group list-group-flush">
                    <?php foreach($allNews as $news): ?>
                        <a href="/notice?id=<?= $news['id'] ?>" class="list-group-item mb-3" id="<?= $news['id'] ?>">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-2"><?= $news['title'] ?></h5>
                                <small><?= $news['date'] ?></small>
                            </div>
                            <p class="mb-3 truncar-3l"><?= $news['text'] ?></p>
                            <div>
                                <span class="badge text-bg-primary"><?= $news['topic'] ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <div class="row my-4">
            <div class="col-12 pt-4">
                <h2 class="text-center">Politic</h2>
                <hr>
                <div class="list-group list-group list-group-flush">
                    <?php foreach($allNews as $news): ?>
                        <a href="/notice?id=<?= $news['id'] ?>" class="list-group-item mb-3" id="<?= $news['id'] ?>">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-2"><?= $news['title'] ?></h5>
                                <small><?= $news['date'] ?></small>
                            </div>
                            <p class="mb-3 truncar-3l"><?= $news['text'] ?></p>
                            <div>
                                <span class="badge text-bg-primary"><?= $news['topic'] ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>