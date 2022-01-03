import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    cssCodeSplit: true,
    lib: {
      entry: 'src/main.js',
      name: 'Voyager Translations Editor',
      formats: ['umd'],
      fileName: 'voyager-translation-editor'
    },
    rollupOptions: {
      external: ['vue', 'axios'],
      output: {
        globals: {
          vue: 'Vue',
          axios: 'axios',
        }
      }
    }
  }
})
