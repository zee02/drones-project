/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // CRÍTICO: Garante que o Tailwind leia todos os arquivos Blade
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}