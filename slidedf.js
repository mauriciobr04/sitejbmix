// Seleciona todos os slideshows com o atributo data-component="slideshow"
var slideshows = document.querySelectorAll('[data-component="slideshow"]');
  
// Aplica a função initSlideShow a cada slideshow
slideshows.forEach(initSlideShow);

// Função para inicializar um slideshow específico
function initSlideShow(slideshow) {
    // Seleciona todos os slides dentro do slideshow atual
    var slides = slideshow.querySelectorAll('[role="list"] .slide');
    var index = 0;
    var time = 5000; // Intervalo de tempo para trocar de slide (em milissegundos)

    // Adiciona a classe 'active' ao primeiro slide
    slides[index].classList.add('active');  
    
    // Configura o intervalo para trocar de slide
    setInterval(() => {
        // Remove a classe 'active' do slide atual
        slides[index].classList.remove('active');
        
        // Move para o próximo slide (circularmente)
        index++;
        
        // Se atingir o final dos slides, volta para o primeiro slide
        if (index === slides.length) {
            index = 0; 
        }
        
        // Adiciona a classe 'active' ao próximo slide
        slides[index].classList.add('active');

    }, time);
}