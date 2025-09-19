<template>
    <div class="min-h-screen bg-gradient-to-br from-blue-900 via-indigo-800 to-purple-900 flex items-center justify-center p-4 md:p-6">
      <div class="w-full max-w-2xl bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl overflow-hidden border border-white/20">
        <!-- Header con título grande -->
        <div class="relative bg-gradient-to-r from-blue-600 to-indigo-700 p-6 text-center overflow-hidden">
          <div class="absolute inset-0 opacity-20 pattern-dots pattern-blue-500 pattern-bg-transparent pattern-size-6 pattern-opacity-20"></div>
          <h1 class="text-3xl md:text-4xl font-bold text-white tracking-wide relative z-10">TRABAJO FELIPE Y ALEJANDRO</h1>
          <h2 class="text-xl md:text-2xl font-semibold text-indigo-200 mt-2 relative z-10">Criptografía en Álgebra Lineal</h2>
          <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-cyan-400 to-transparent"></div>
        </div>
  
        <div class="p-6 md:p-8 space-y-8">
          <!-- Sección de Texto a Matriz -->
          <div class="bg-white/20 rounded-xl p-6 shadow-lg border border-white/30">
            <div class="flex items-center mb-4">
              <div class="bg-indigo-600 p-2 rounded-lg mr-3 shadow-md">
              </div>
              <h3 class="text-xl font-bold text-white">Convertir Texto a Matriz</h3>
            </div>
            
            <div class="space-y-4">
              <div class="relative">
                <input
                  v-model="inputText"
                  type="text"
                  maxlength="20"
                  placeholder="Escribe tu texto aquí (ej: SECRETO)"
                  class="w-full px-5 py-3 bg-white/95 text-gray-800 border-2 border-indigo-300 rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-400 focus:border-indigo-500 outline-none transition placeholder-gray-400 font-medium"
                />
                <span class="absolute right-3 top-3.5 text-xs text-gray-500 bg-white/80 px-2 py-1 rounded-full">
                  {{ inputText.length }}/20
                </span>
              </div>
  
              <button
                @click="convertToMatrix"
                class="w-full group relative overflow-hidden bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-3 rounded-xl font-bold hover:from-indigo-700 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center"
              >
                <span class="relative z-10 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                  </svg>
                  Convertir a Matriz
                </span>
                <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
              </button>
            </div>
          </div>
  
          <!-- Sección de Matriz a Texto -->
          <div class="bg-white/20 rounded-xl p-6 shadow-lg border border-white/30">
            <div class="flex items-center mb-4">
              <div class="bg-purple-600 p-2 rounded-lg mr-3 shadow-md">
              </div>
              <h3 class="text-xl font-bold text-white">Convertir Matriz a Texto</h3>
            </div>
            
            <div class="space-y-4">
              <div class="overflow-x-auto pb-2">
                <div class="inline-block min-w-full align-middle">
                  <div class="overflow-hidden shadow-lg rounded-lg border border-white/20">
                    <table class="min-w-full divide-y divide-white/20">
                      <tbody class="bg-white/10 divide-y divide-white/20">
                        <tr v-for="(row, rowIndex) in matrix" :key="rowIndex">
                          <td v-for="(num, colIndex) in row" :key="colIndex" class="px-2 py-2 whitespace-nowrap">
                            <input
                              v-model.number="matrix[rowIndex][colIndex]"
                              type="number"
                              min="0"
                              max="25"
                              class="w-16 h-16 text-center text-2xl font-bold bg-white/95 text-gray-800 border-2 border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:border-purple-500 outline-none transition font-mono"
                            />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
  
              <div class="flex justify-between">
                <button 
                  @click="addRow"
                  class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition shadow-md flex items-center"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                  Añadir Fila
                </button>
                <button 
                  @click="removeRow"
                  :disabled="matrix.length <= 1"
                  :class="{'opacity-50 cursor-not-allowed': matrix.length <= 1}"
                  class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition shadow-md flex items-center"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                  </svg>
                  Eliminar Fila
                </button>
              </div>
  
              <button
                @click="convertToText"
                class="w-full group relative overflow-hidden bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-xl font-bold hover:from-purple-700 hover:to-indigo-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center"
              >
                <span class="relative z-10 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                  </svg>
                  Convertir a Texto
                </span>
                <span class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
              </button>
            </div>
          </div>
  
          <!-- Resultados -->
          <transition name="fade-slide" mode="out-in">
            <div v-if="matrix.length || outputText" key="results" class="space-y-6">
              <!-- Visualización de Matriz -->
              <div v-if="matrix.length" class="bg-black/20 rounded-xl p-6 shadow-lg border border-white/20">
                <div class="flex items-center justify-between mb-4">
                  <h3 class="text-lg font-bold text-white">Matriz Resultante:</h3>
                  <button 
                    @click="showLetterGuide = true"
                    class="text-sm text-cyan-300 hover:text-cyan-200 flex items-center"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Ver guía de letras
                  </button>
                </div>
                
                <div class="flex justify-center">
                  <div class="border-2 border-cyan-400/50 rounded-lg overflow-hidden shadow-2xl">
                    <div v-for="(row, rowIndex) in matrix" :key="rowIndex" class="flex">
                      <div 
                        v-for="(num, colIndex) in row" 
                        :key="colIndex"
                        class="w-16 h-16 flex items-center justify-center text-2xl font-bold font-mono text-white bg-gradient-to-br from-indigo-500/90 to-blue-600/90 border-b border-r border-white/20"
                        :class="{
                          'border-r-0': colIndex === row.length - 1,
                          'border-b-0': rowIndex === matrix.length - 1
                        }"
                      >
                        {{ num }}
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="mt-4 text-center text-sm text-white/80">
                  <p>Dimensión: {{ matrix.length }}×{{ matrix[0]?.length || 0 }}</p>
                </div>
              </div>
  
              <!-- Texto resultante -->
              <div v-if="outputText" class="bg-black/20 rounded-xl p-6 shadow-lg border border-white/20">
                <h3 class="text-lg font-bold text-white mb-3">Texto Resultante:</h3>
                <div class="bg-white/95 p-4 rounded-lg border border-white/30 shadow-inner">
                  <p class="text-2xl font-bold text-center text-gray-800 tracking-wider">{{ outputText }}</p>
                </div>
                <div class="mt-4 flex justify-center">
                  <button
                    @click="copyToClipboard"
                    class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition shadow-md flex items-center"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                    </svg>
                    Copiar Texto
                  </button>
                </div>
              </div>
            </div>
          </transition>
        </div>
      </div>
  
      <!-- Modal de Guía de Letras -->
      <transition name="modal">
        <div v-if="showLetterGuide" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm">
          <div class="bg-gradient-to-br from-blue-800 to-indigo-900 rounded-2xl shadow-2xl border border-white/20 max-w-md w-full overflow-hidden">
            <div class="p-5 flex justify-between items-center border-b border-white/20">
              <h3 class="text-xl font-bold text-white">Guía de Letras</h3>
              <button @click="showLetterGuide = false" class="text-white hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="p-5">
              <div class="grid grid-cols-5 gap-3 text-center">
                <div v-for="(letter, index) in alphabet" :key="index" class="p-2 bg-white/10 rounded-lg border border-white/20">
                  <div class="text-sm font-bold text-cyan-400">{{ index }}</div>
                  <div class="text-white">{{ letter }}</div>
                </div>
              </div>
              <div class="mt-4 text-sm text-white/80">
                <p class="mb-2">Cada letra del alfabeto corresponde a un número del 0 al 25.</p>
                <p>Ejemplo: A=0, B=1, C=2, ..., Z=25</p>
              </div>
            </div>
            <div class="p-4 bg-white/5 border-t border-white/20 flex justify-end">
              <button @click="showLetterGuide = false" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition shadow-md">
                Cerrar
              </button>
            </div>
          </div>
        </div>
      </transition>
  
      <!-- Notificación de Copiado -->
      <transition name="notification">
        <div v-if="showCopyNotification" class="fixed bottom-4 right-4 z-50">
          <div class="bg-green-600 text-white px-4 py-3 rounded-lg shadow-lg flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            Texto copiado al portapapeles!
          </div>
        </div>
      </transition>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        inputText: '',
        outputText: '',
        matrix: [[0, 0]],
        showLetterGuide: false,
        showCopyNotification: false,
        alphabet: Array.from({ length: 26 }, (_, i) => String.fromCharCode(65 + i))
      };
    },
    methods: {
      convertToMatrix() {
        const clean = this.inputText.toUpperCase().replace(/[^A-Z]/g, '');
        const codes = clean.split('').map(char => char.charCodeAt(0) - 65);
        
        if (codes.length === 0) {
          this.matrix = [[0, 0]];
          this.outputText = '';
          return;
        }
  
        const result = [];
        for (let i = 0; i < codes.length; i += 2) {
          result.push([
            codes[i],
            codes[i + 1] !== undefined ? codes[i + 1] : 0
          ]);
        }
  
        this.matrix = result;
        this.outputText = '';
      },
      convertToText() {
        let text = '';
        for (const row of this.matrix) {
          for (const num of row) {
            const validNum = Math.max(0, Math.min(25, parseInt(num) || 0));
            text += String.fromCharCode(validNum + 65);
          }
        }
        this.outputText = text;
      },
      addRow() {
        this.matrix.push([0, 0]);
      },
      removeRow() {
        if (this.matrix.length > 1) {
          this.matrix.pop();
        }
      },
      copyToClipboard() {
        if (this.outputText) {
          navigator.clipboard.writeText(this.outputText);
          this.showCopyNotification = true;
          setTimeout(() => {
            this.showCopyNotification = false;
          }, 2000);
        }
      }
    }
  };
  </script>
  
  <style scoped>
  /* Transiciones */
  .fade-slide-enter-active, .fade-slide-leave-active {
    transition: all 0.3s ease;
  }
  .fade-slide-enter-from {
    opacity: 0;
    transform: translateY(10px);
  }
  .fade-slide-leave-to {
    opacity: 0;
    transform: translateY(-10px);
  }
  
  .modal-enter-active, .modal-leave-active {
    transition: opacity 0.3s ease;
  }
  .modal-enter-from, .modal-leave-to {
    opacity: 0;
  }
  
  .notification-enter-active, .notification-leave-active {
    transition: all 0.3s ease;
  }
  .notification-enter-from, .notification-leave-to {
    opacity: 0;
    transform: translateY(20px);
  }
  
  /* Input number styles */
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
  input[type="number"] {
    -moz-appearance: textfield;
  }
  
  /* Efecto de puntos en el header */
  .pattern-dots {
    background-image: radial-gradient(currentColor 1px, transparent 1px);
    background-size: 12px 12px;
  }
  </style>