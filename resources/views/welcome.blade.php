hello

<style>
    section:not(:target):not(#home),
    section:target ~ #home {
        display: none
    }
</style>
<nav>
    <a href="/">home</a>
    <a href="#contact">contact</a>
    <a href="#about">about</a>
    <a href="#blog">blog</a>
</nav>
<main>
    <section id="contact">contact section...</section>
    <section id="about">about section...</section>
    <section id="blog">blog section...</section>
    <section id="home">home section...</section>
</main>
