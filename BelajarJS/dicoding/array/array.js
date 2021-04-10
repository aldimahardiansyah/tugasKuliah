let arr = ['Cokelat', 42.5, 22, false, 'Programming'];

const [Favorite, float, num, bulean, text] = arr; // destructuring array

arr.splice(3, 1);  // mengahpus dari index ke 3 sebanyak 1 elemen

console.log(Favorite);
console.log(float);
console.log(num);
console.log(bulean);
console.log(text);

console.log(arr);
console.log(arr.join(' - '));
console.log(...arr);
