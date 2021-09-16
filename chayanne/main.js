var quotes = [
    'Si te he fallado te pido perdón de la unica forma que se',
    'Hay que ser torero, poner el alma en el ruedo',
    'Mi pecho lo dejo abierto para que vivas en el',
    'El sutil andamio de tus ojos son mi penitencia',
    'Ahora que no estás aquí me doy cuenta cuanta falta me haces',
    'Que yo quiero ser tu alma, ser tu socio, ser tu amante',
    'Amanecer sin ti es cosa de locos',
    'Si no estás conmigo se me escapa el aire',
    'Si las lágrimas vuelven ellas me harán más fuerte',
    'Un día es un siglo sin ti',
    'Enamorado del amor no sé vivir sin ti',
    'Buscando tu calor encuentro oscuridad y frío',
    'Me gusta tu cara, me gusta tu pelo',
    'Tú tienes el control de lo que pienso'
]

function chayanneDice () {
    var randomNumber = Math.floor (Math.random() * (quotes.length ));
    document.getElementById('fraseChayanne').innerHTML = quotes[randomNumber];
}