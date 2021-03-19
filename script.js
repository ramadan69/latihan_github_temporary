// //DOM Selection
// // document.getElementById() -> element

// // get element
// const judul = document.getElementById('judul');
// // set style color to red
// judul.style.color = 'red';
// // set style backgroundColor to #ccc
// judul.style.backgroundColor = '#ccc';
// // set innerHTML
// judul.innerHTML = 'Belajar DOM';

//Contoh Penggunaan getElementsByTagName -> HTMLColections
//get Collection of element

const p = document.getElementsByTagName('p');

//set element of collection by index of array

p[0].style.backgroundColor = 'lightblue';
p[1].style.backgroundColor = 'lightblue';
p[2].style.backgroundColor = 'yellow';
p[3].style.backgroundColor = 'green';

// dengan pengulangan

// for (let i = 0; i < p.length; i++) {
//     p[i].style.backgroundColor = 'lightblue';
// }

//Contoh Penggunaan getElementsByClassName -> HTMLCollection

const p1 = document.getElementsByClassName('p1');
p1[0].innerHTML = 'ini diubah dari javascript';

//Contoh Penggunaan querySelector -> element

const p4 = document.querySelector('#b p');
p4.style.color = 'blue';
p4.style.fontSize = '30px';

const li2 = document.querySelector('section#b ul li:nth-child(2');
li2.style.backgroundColor = ('orange');
p.innerHTML = 'ini diubah melalui javascript';

// //mengatur p pertama

// const p = document.querySelector('p');
// p.innerHTML = 'ini diubah memlalui javasript';

// // Contoh Penggunaan querySelectorAll

// const p = document.querySelectorAll('p');

// // mengatur element

// p[2].style.backgroundColor = 'lightblue';