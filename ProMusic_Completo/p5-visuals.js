let song;
let fft;

function preload() {
  song = loadSound('assets/ejemplo.mp3'); // cambia esto según tu canción
}

function setup() {
  createCanvas(600, 200);
  fft = new p5.FFT();
  song.play();
}

function draw() {
  background(0);
  let spectrum = fft.analyze();
  noStroke();
  fill(0, 255, 0);
  for (let i = 0; i < spectrum.length; i += 10) {
    let x = map(i, 0, spectrum.length, 0, width);
    let h = -height + map(spectrum[i], 0, 255, height, 0);
    rect(x, height, width / spectrum.length * 10, h);
  }
}
