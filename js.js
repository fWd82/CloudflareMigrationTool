let text = 
`https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/bbc286053e86c522ff9d853037c6f841/downloads/default.mp4?filename=bbc286053e86c522ff9d853037c6f841.mp4
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/6a885eb13cd4e3b0cdc766294038e57b/downloads/default.mp4?filename=6a885eb13cd4e3b0cdc766294038e57b.mp4
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/e9e1d9b89ccd6e4cff0ef338249b11b3/downloads/default.mp4?filename=e9e1d9b89ccd6e4cff0ef338249b11b3.mp4
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/12fd325a89d478f1081017cd03977c60/downloads/default.mp4?filename=12fd325a89d478f1081017cd03977c60.mp4

https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/d759ca8f782f617ca54de06684d5482f/downloads/default.mp4?filename=d759ca8f782f617ca54de06684d5482f.mp4
https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a935d89dae62e7427af9a4b39024a348/downloads/default.mp4?filename=a935d89dae62e7427af9a4b39024a348.mp4    


`

let links = text.split('\n').map(link => link.trim()).filter(link => link !== "");
let title = 'https://customer-0rjknk9n0a2sedbn.cloudflarestream.com/a935d89dae62e7427af9a4b39024a348/downloads/default.mp4?filename=a935d89dae62e7427af9a4b39024a348.mp4'.split('/')[3];
// console.log(title);

links.forEach((link)=>{
    title = link.split('/')[3];
    console.log(title);
    console.log(link);
})