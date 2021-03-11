var makanan = prompt('Masukkan nama makanan: Co./ Mie, Bayam, Gorengan, Nasi, Ikan.');

switch (makanan) {
    case 'Mie':
        alert('Makanan tidak sehat');
        break;
    case 'Gorengan':
        alert('Makanan tidak sehat');
        break;
    case 'Nasi':
        alert('Makanan sehat');
        break;
    case 'Ikan':
        alert('Makanan sehat');
        break;
    case 'Bayam':
        alert('Makanan sehat');
        break;
    default:
        alert('Makanan tidak diketahui')
        break;
}