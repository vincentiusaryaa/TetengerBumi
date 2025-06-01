<template>
  <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-6">
          <h1 class="text-2xl font-bold text-gray-900 mb-6">Edit Foto Profil</h1>
          
          <!-- Image Cropper -->
          <div class="flex flex-col items-center mb-8 w-full max-w-md mx-auto">
            <div class="preview-container w-48 h-48 rounded-full overflow-hidden bg-gray-100 relative mb-4">
              <div class="w-full h-full">
                <img 
                  v-if="imagePreview" 
                  :src="imagePreview" 
                  ref="imageElement"
                  class="w-full h-full object-cover cursor-move"
                  :style="{ transform: `scale(${scale}) translate(${offsetX}px, ${offsetY}px)` }"
                  @mousedown="startDrag"
                  @touchstart="startDrag"
                />
                <div v-else class="w-full h-full bg-gray-100 flex items-center justify-center">
                  <span class="text-gray-400">Pratinjau Gambar</span>
                </div>
              </div>
            </div>
            <div class="flex flex-col items-center space-y-4 w-full max-w-md">
              <input 
                type="file" 
                id="photo-upload"
                ref="fileInput"
                accept="image/*" 
                @change="handleFileSelect"
                class="hidden"
              />
              <button 
                @click="$refs.fileInput.click()"
                class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
              >
                Pilih Gambar
              </button>
              
              <div v-if="imagePreview" class="w-full space-y-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Perbesar/Perkecil</label>
                <div class="flex items-center gap-4">
                  <button 
                    @click="adjustScale(-0.1)"
                    class="p-1 rounded-full bg-gray-200 hover:bg-gray-300"
                    :disabled="scale <= 0.5"
                  >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                    </svg>
                  </button>
                  <input 
                    type="range" 
                    v-model="scale" 
                    min="0.5" 
                    max="2" 
                    step="0.1"
                    class="flex-1 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                  />
                  <button 
                    @click="adjustScale(0.1)"
                    class="p-1 rounded-full bg-gray-200 hover:bg-gray-300"
                    :disabled="scale >= 2"
                  >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                  </button>
                </div>
                <div class="flex justify-between text-xs text-gray-500">
                  <span>Kecil</span>
                  <span>Besar</span>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Action Buttons -->
          <div class="flex justify-between space-x-3 pt-4 border-t border-gray-200">
            <div>
              <a 
                :href="'/profile'" 
                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
              >
                <i class="fas fa-user mr-1"></i> Kembali ke Profile
              </a>
            </div>
            <div class="flex space-x-3">
              <a 
                :href="'/profile'" 
                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
              >
                Batal
              </a>
              <button 
                type="button"
                @click="savePhoto"
                :disabled="isSaving"
                class="px-4 py-2 bg-green-600 text-white rounded-md shadow-sm text-sm font-medium hover:bg-green-700 disabled:opacity-50 disabled:cursor-not-allowed"
                ref="submitButton"
              >
                {{ isSaving ? 'Mengunggah...' : 'Simpan Perubahan' }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      imagePreview: '',
      scale: 1,
      isSaving: false,
      offsetX: 0,
      offsetY: 0,
      isDragging: false,
      dragStartX: 0,
      dragStartY: 0,
      initialOffsetX: 0,
      initialOffsetY: 0
    }
  },
  mounted() {
    // Tambahkan event listener untuk mouse/touch move dan up
    document.addEventListener('mousemove', this.onDrag);
    document.addEventListener('touchmove', this.onDrag, { passive: false });
    document.addEventListener('mouseup', this.stopDrag);
    document.addEventListener('touchend', this.stopDrag);
  },
  
  beforeUnmount() {
    // Hapus event listener saat komponen dihapus
    document.removeEventListener('mousemove', this.onDrag);
    document.removeEventListener('touchmove', this.onDrag);
    document.removeEventListener('mouseup', this.stopDrag);
    document.removeEventListener('touchend', this.stopDrag);
  },
  
  methods: {
    handleFileSelect(event) {
      const file = event.target.files[0];
      if (!file) return;
      
      if (!file.type.match('image.*')) {
        alert('Silakan pilih file gambar');
        return;
      }
      
      const reader = new FileReader();
      const self = this;
      
      reader.onload = function(e) {
        self.imagePreview = e.target.result;
        self.scale = 1; // Reset scale when new image is selected
        self.offsetX = 0; // Reset position
        self.offsetY = 0; // Reset position
      };
      
      reader.readAsDataURL(file);
    },
    
    // Fungsi untuk memulai drag
    startDrag(event) {
      event.preventDefault();
      this.isDragging = true;
      
      // Simpan posisi awal
      if (event.type === 'mousedown') {
        this.dragStartX = event.clientX;
        this.dragStartY = event.clientY;
      } else if (event.type === 'touchstart') {
        this.dragStartX = event.touches[0].clientX;
        this.dragStartY = event.touches[0].clientY;
      }
      
      this.initialOffsetX = this.offsetX;
      this.initialOffsetY = this.offsetY;
    },
    
    // Fungsi saat sedang drag
    onDrag(event) {
      if (!this.isDragging) return;
      event.preventDefault();
      
      let currentX, currentY;
      if (event.type === 'mousemove') {
        currentX = event.clientX;
        currentY = event.clientY;
      } else if (event.type === 'touchmove') {
        currentX = event.touches[0].clientX;
        currentY = event.touches[0].clientY;
      } else {
        return;
      }
      
      // Hitung jarak drag
      const deltaX = (currentX - this.dragStartX) / this.scale;
      const deltaY = (currentY - this.dragStartY) / this.scale;
      
      // Update posisi gambar
      this.offsetX = this.initialOffsetX + deltaX;
      this.offsetY = this.initialOffsetY + deltaY;
    },
    
    // Fungsi untuk berhenti drag
    stopDrag() {
      this.isDragging = false;
    },
    
    adjustScale(delta) {
      const newScale = parseFloat((this.scale + delta).toFixed(1));
      if (newScale >= 0.5 && newScale <= 2) {
        this.scale = newScale;
      }
    },
    
    getCsrfToken() {
      // Cari meta tag dengan name="csrf-token"
      const token = document.querySelector('meta[name="csrf-token"]');
      if (token) {
        return token.getAttribute('content');
      }
      
      // Coba mencari dari cookies
      const cookies = document.cookie.split(';');
      for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].trim();
        if (cookie.startsWith('XSRF-TOKEN=')) {
          return decodeURIComponent(cookie.substring('XSRF-TOKEN='.length));
        }
      }
      
      console.error('CSRF token tidak ditemukan');
      return '';
    },
    
    savePhoto() {
      // Cek apakah ada gambar yang dipilih
      if (!this.imagePreview) {
        alert('Silakan pilih foto terlebih dahulu');
        return;
      }
      
      // Set loading state
      this.isSaving = true;
      
      try {
        // Dapatkan elemen gambar
        const img = this.$refs.imageElement;
        if (!img) {
          throw new Error('Elemen gambar tidak ditemukan');
        }
        
        // Simpan data transformasi ke localStorage
        const transformData = {
          scale: this.scale,
          offsetX: this.offsetX,
          offsetY: this.offsetY,
          timestamp: new Date().getTime()
        };
        localStorage.setItem('profile_photo_transform', JSON.stringify(transformData));
        
        // Buat canvas untuk memotong dan mengubah ukuran gambar
        const canvas = document.createElement('canvas');
        const size = 400; // Ukuran output (sesuaikan dengan kebutuhan)
        canvas.width = size;
        canvas.height = size;
        
        const ctx = canvas.getContext('2d');
        if (!ctx) {
          throw new Error('Tidak dapat menginisialisasi canvas');
        }
        
        // Buat lingkaran untuk crop
        ctx.beginPath();
        ctx.arc(size / 2, size / 2, size / 2, 0, Math.PI * 2, true);
        ctx.closePath();
        ctx.clip();
        
        // Buat background putih
        ctx.fillStyle = 'white';
        ctx.fillRect(0, 0, size, size);
        
        // Proses dan gambar foto ke canvas
        const self = this;
        const imgEl = new Image();
        imgEl.crossOrigin = 'Anonymous';
        
        // Handle error loading image
        imgEl.onerror = () => {
          console.error('Error loading image');
          alert('Gagal memuat gambar. Pastikan file yang diunggah valid.');
          self.isSaving = false;
        };
        
        // Handle successful image load
        imgEl.onload = () => {
          try {
            // Terapkan skala dan posisi yang sama dengan pratinjau
            const scaledWidth = img.width * self.scale;
            const scaledHeight = img.height * self.scale;

            // Perhitungan identik dengan CSS transform: scale() translate()
            // Pastikan offsetX dan offsetY adalah dalam satuan pixel relatif ke canvas
            // offsetX dan offsetY sudah diatur pada preview dengan drag, jadi gunakan langsung
            const x = (size - scaledWidth) / 2 + self.offsetX;
            const y = (size - scaledHeight) / 2 + self.offsetY;
            // Gambar foto ke canvas
            ctx.drawImage(img, x, y, scaledWidth, scaledHeight);
            
            // Konversi canvas ke format PNG untuk kualitas maksimal
            const dataUrl = canvas.toDataURL('image/png', 1.0);
            
            // Hapus data lama dari localStorage
            localStorage.removeItem('canvas_image_data');
            
            // Konversi data URL ke Blob
            fetch(dataUrl)
              .then(res => res.blob())
              .then(blob => {
                // Buat FormData dan tambahkan foto
                const formData = new FormData();
                formData.append('photo', blob, 'profile.jpg');
                
                // Kirim ke server
                return fetch('/profile/photo', {
                  method: 'POST',
                  headers: {
                    'X-CSRF-TOKEN': csrfToken
                  },
                  body: formData
                });
              })
              .then(response => response.json())
              .then(data => {
                if (data && data.success) {
                  console.log('Foto berhasil diupload:', data);
                  // Hapus dataURL canvas dari localStorage agar tidak digunakan lagi untuk profil
                  localStorage.removeItem('canvas_image_data');
                  // Tambahkan timestamp untuk menghindari cache browser
                  const timestamp = new Date().getTime();
                  const photoUrlWithTimestamp = `${data.photo_url}?t=${timestamp}`;
                  
                  // Simpan URL baru ke localStorage
                  localStorage.setItem('latest_profile_photo_url', photoUrlWithTimestamp);
                  
                  // Paksa refresh komponen dengan mengupdate ref
                  if (this.$refs.imageElement) {
                    this.$refs.imageElement.src = ''; // Clear src dulu
                    setTimeout(() => {
                      this.$refs.imageElement.src = photoUrlWithTimestamp;
                    }, 10);
                  }
                  
                  // Tampilkan pesan sukses
                  alert('Foto profil berhasil diperbarui!');
                  
                  // Redirect ke halaman profil dengan parameter cache buster
                  setTimeout(() => {
                    window.location.href = '/profile?photo_updated=' + new Date().getTime();
                  }, 1000);
                } else {
                  throw new Error(data?.message || 'Gagal mengupload foto');
                }
              })
              .catch(error => {
                console.error('Error uploading photo:', error);
                alert('Error: ' + (error.message || 'Gagal mengupload foto'));
                self.isSaving = false;
              });
          } catch (error) {
            console.error('Error processing canvas:', error);
            alert('Error: ' + (error.message || 'Gagal memproses gambar'));
            self.isSaving = false;
          }
        };
        
        // Muat gambar dari pratinjau
        img.src = this.imagePreview;
      } catch (error) {
        console.error('Error in savePhoto:', error);
        alert('Error: ' + (error.message || 'Terjadi kesalahan'));
        this.isSaving = false;
      }
    },
  }
}
</script>
