<template>
  <AppLayout>
    <div class="relative bg-[#f3f3f3] min-h-screen">
      <!-- Background Image & Overlay -->
      <div class="w-full px-0 pt-[120px] relative bg-Background-Body flex flex-col items-center gap-14">
        <img class="w-full h-[994px] left-0 top-0 absolute z-0" src="/images/image5.png" />
        <div class="w-full h-[994px] left-0 top-0 absolute bg-gradient-to-b from-black/30 to-[#f3f3f3] z-10"></div>
        <div class="relative z-20 w-full flex flex-col items-center">
          <main class="profile-main">
            <h1 class="profile-title">Profil</h1>
            <div class="profile-container">
              <!-- Left: User Info -->
        <div class="profile-card">
          <div class="profile-image">
            <img :src="profile.photo || 'https://randomuser.me/api/portraits/men/32.jpg'" alt="Profil" />
          </div>
          <div class="profile-info">
            <h2>{{ profile.name || '-' }}</h2>
            <p class="email">{{ profile.email || '-' }}</p>
            <p class="phone">{{ formatPhone(profile.phone) || '-' }}</p>
          </div>
          <button class="edit-btn" @click="editProfile">Edit Profil</button>
        </div>
        <!-- Right: Program & Donasi -->
        <div class="profile-details">
          <div class="program-section">
            <div class="section-title">Program Kerja Terdaftar</div>
            <ul class="program-list">
              <li v-for="(prog, idx) in profile.programs" :key="idx">
                {{ prog.name }} <span class="arrow">&gt;</span>
              </li>
              <li v-if="!profile.programs || profile.programs.length === 0" class="empty-program">Belum terdaftar program</li>
            </ul>
          </div>
          <div class="donation-section">
            <div class="section-title">Riwayat Donasi</div>
            <div v-if="profile.donations && profile.donations.length > 0">
              <ul class="donation-list">
                <li v-for="(don, idx) in profile.donations" :key="idx">
                  {{ don.date }} - {{ don.amount | currency }}
                </li>
              </ul>
            </div>
            <div v-else class="donation-history empty">Anda belum pernah melakukan donasi</div>
          </div>
        </div>
      </div>
      <div v-if="loading" class="loading-state">Memuat data...</div>
      <div v-if="error" class="error-state bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded mb-4">{{ error }}</div>
      
      <!-- Modal Form Edit Profil -->
      <div v-if="editMode" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-md mx-4">
          <h3 class="text-xl font-bold mb-4">Edit Profil</h3>
          <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Nama</label>
            <input v-model="editForm.name" class="w-full px-3 py-2 border rounded-md" placeholder="Nama" />
          </div>
          <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Email</label>
            <input v-model="editForm.email" class="w-full px-3 py-2 border rounded-md" placeholder="Email" type="email" />
          </div>
          <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Telepon</label>
            <input v-model="editForm.phone" class="w-full px-3 py-2 border rounded-md" placeholder="Nomor Telepon" />
          </div>
          <div class="flex justify-end gap-2 mt-6">
            <button @click="cancelEdit" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Batal</button>
            <button @click="saveProfile" class="px-4 py-2 bg-[#84CC16] text-white rounded-md hover:bg-[#65A30D]">Simpan</button>
          </div>
        </div>
      </div>
        </main>
      </div>
    </div>

    <!-- Footer Info -->
    <div class="bg-gray-800 text-white py-10 px-6 mt-20">
      <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-10">
        <!-- Logo & Desc -->
        <div class="flex flex-col gap-3">
          <div class="flex items-center gap-2">
            <img src="/images/tb1.png" class="w-10 h-10" alt="Logo" />
            <div>
              <p class="font-bold text-sm leading-tight">TETENGER</p>
              <p class="font-bold text-sm leading-tight">BUMI</p>
            </div>
          </div>
          <p class="text-xs font-semibold max-w-xs">
            Preserving nature for future generations through innovative conservation finance.
          </p>
          <div class="flex gap-2">
            <div class="w-7 h-7 relative bg-[#84CC16] rounded-[200px] overflow-hidden flex items-center justify-center">
              <img src="/images/instagram.svg" alt="Instagram" class="w-4 h-4" />
            </div>
            <div class="w-7 h-7 relative bg-[#84CC16] rounded-[200px] overflow-hidden flex items-center justify-center">
              <img src="/images/youtube.svg" alt="Youtube" class="w-4 h-4" />
            </div>
            <div class="w-7 h-7 relative bg-[#84CC16] rounded-[200px] overflow-hidden flex items-center justify-center">
              <img src="/images/facebook.svg" alt="Facebook" class="w-4 h-4" />
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <div class="flex flex-col sm:flex-row gap-10">
          <div>
            <h4 class="text-lg font-semibold mb-3">Explore</h4>
            <ul class="space-y-2 text-sm font-reguler">
              <li>Donatur</li>
              <li>Tentang Kami</li>
              <li>Partnership</li>
              <li>Relawan</li>
            </ul>
          </div>
          <div>
            <h4 class="text-lg font-semibold mb-3">Contact</h4>
            <ul class="space-y-2 text-sm font-reguler">
              <li class="flex items-center gap-2"><div class="w-5 h-5 rounded-full">
                <img src="/images/call.svg" alt="Contact" class="w-4 h-4" />
              </div>+62 822-4555-3609</li>
              <li class="flex items-center gap-2"><div class="w-5 h-5 rounded-full">
                <img src="/images/sms.svg" alt="Email" class="w-4 h-4" />
              </div>tetengerbumi@ub.ac.id</li>
              <li class="flex items-start gap-2"><div class="w-5 h-5 rounded-full">
                <img src="/images/location.svg" alt="Adress" class="w-4 h-4" />
              </div><span>Universitas Brawijaya</span></li>
              <li class="flex items-start gap-2"><div class="w-5 h-5 rounded-full">
              </div><span>Jl. Veteran No.25, Kota Malang, Jawa Timur</span></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Footer Bottom -->
      <div class="mt-10 border-t border-white/30 pt-5 text-center text-sm font-reguler">
        <p>© 2025 Tetenger Bumi - Kelompok 5 Capstone Project</p>
        <div class="flex justify-center gap-5 mt-2">
          <a href="#" class="font-reguler">Kebijakan Privasi</a>
          <a href="#" class="font-reguler">Syarat dan Ketentuan</a>
        </div>
      </div>
    </div>
  </div>
  </AppLayout>
</template>

<script>
import axios from 'axios';

// Pastikan axios mengirim cookies dengan request
axios.defaults.withCredentials = true;
import { Link } from '@inertiajs/vue3';

export default {
  name: 'ProfilePage',
  components: {
    Link
  },
  data() {
    return {
      loading: true,
      error: null,
      editMode: false,
      editForm: {
        name: '',
        email: '',
        phone: ''
      },
      profile: {
        name: '',
        email: '',
        phone: '',
        photo: '',
        programs: [],
        donations: []
      }
    };
  },
  created() {
    this.fetchProfile();
  },
  methods: {
    async fetchProfile() {
      this.loading = true;
      this.error = null;
      
      try {
        // Coba gunakan Sanctum session/cookie authentication
        const res = await axios.get('/api/profile', { withCredentials: true });
        this.profile = res.data;
        console.log('Profile data loaded from authenticated endpoint:', this.profile);
        // Jika berhasil, hapus pesan error
        this.error = null;
        return;
      } catch (firstErr) {
        console.error('Error fetching authenticated profile:', firstErr.response?.status, firstErr.response?.data || firstErr.message);
        
        // Jika gagal, coba endpoint publik sebagai fallback
        try {
          console.log('Trying public endpoint as fallback...');
          const demoRes = await axios.get('/api/profile-demo');
          this.profile = demoRes.data;
          console.log('Profile data loaded from demo endpoint:', this.profile);
          this.error = 'Menggunakan data demo. Silakan login ulang jika ingin mengubah profil.';
          return;
        } catch (secondErr) {
          console.error('Error fetching demo profile:', secondErr);
          
          // Jika kedua endpoint gagal, gunakan data hardcoded
          this.profile = {
            name: 'User Tetenger Bumi',
            email: 'user@tetengerbumi.com',
            phone: '08123456789',
            photo: 'https://randomuser.me/api/portraits/men/32.jpg',
            programs: [
              { name: 'Wali Pohon' },
              { name: 'Wakaf Pohon' }
            ],
            donations: [
              { date: '2025-05-15', amount: 150000 },
              { date: '2025-05-01', amount: 75000 }
            ]
          };
          
          // Tampilkan pesan error yang lebih ramah
          this.error = 'Menggunakan data contoh karena server tidak dapat diakses.';
        }
      } finally {
        this.loading = false;
      }
    },
    formatPhone(phone) {
      // Format phone number if needed
      return phone;
    },
    
    // Edit Profile Methods
    editProfile() {
      // Salin data profil ke form edit
      this.editForm = {
        name: this.profile.name,
        email: this.profile.email,
        phone: this.profile.phone || ''
      };
      this.editMode = true;
    },
    
    async saveProfile() {
      try {
        this.loading = true;
        const response = await axios.put('/api/profile', this.editForm);
        console.log('Profile updated:', response.data);
        
        // Refresh data profil
        await this.fetchProfile();
        
        // Tutup modal edit
        this.editMode = false;
        
        // Tampilkan notifikasi sukses jika ada
        alert('Profil berhasil diperbarui');
      } catch (error) {
        console.error('Error saving profile:', error.response?.data || error.message);
        alert('Gagal menyimpan profil. ' + (error.response?.data?.message || error.message));
      } finally {
        this.loading = false;
      }
    },
    
    cancelEdit() {
      this.editMode = false;
    }
  }
};
</script>

<style scoped>
.profile-page {
  background: linear-gradient(180deg, #f6f9f6 0%, #e3f1e6 100%);
  min-height: 100vh;
  font-family: 'Inter', Arial, sans-serif;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 24px 48px 16px 48px;
  background: transparent;
}
.logo {
  width: 48px;
  margin-right: 12px;
}
.brand {
  font-weight: bold;
  font-size: 1.4rem;
  letter-spacing: 1px;
}
.brand .green {
  color: #7ad957;
}
.navbar-center {
  display: flex;
  gap: 32px;
  align-items: center;
}
.navbar-center a {
  color: #222;
  text-decoration: none;
  font-weight: 500;
  font-size: 1rem;
  transition: color 0.2s;
}
.navbar-center a:hover {
  color: #7ad957;
}
.dropdown {
  position: relative;
}
.navbar-right .profile-avatar {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  overflow: hidden;
  border: 3px solid #7ad957;
  box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}
.profile-avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.profile-title {
  text-align: center;
  font-size: 2.5rem;
  font-weight: 700;
  margin: 40px 0 24px 0;
  color: #fff;
  text-shadow: 0 2px 24px #4e7c5e;
}

.profile-container {
  display: flex;
  justify-content: center;
  gap: 40px;
  margin-bottom: 56px;
}
.profile-card {
  background: #fff;
  border-radius: 32px;
  box-shadow: 0 2px 24px rgba(122,217,87,0.08);
  padding: 40px 32px 32px 32px;
  min-width: 320px;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 16px;
}
.profile-image {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  border: 4px solid #7ad957;
  overflow: hidden;
  margin-bottom: 20px;
}
.profile-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.profile-info h2 {
  font-size: 1.7rem;
  font-weight: 700;
  margin-bottom: 4px;
}
.profile-info .email,
.profile-info .phone {
  color: #7a7a7a;
  font-size: 1rem;
  margin-bottom: 2px;
}
.edit-btn {
  background: #7ad957;
  color: #fff;
  border: none;
  border-radius: 24px;
  padding: 12px 36px;
  font-size: 1rem;
  font-weight: 600;
  margin-top: 24px;
  cursor: pointer;
  transition: background 0.2s;
}
.edit-btn:hover {
  background: #5bbf3a;
}

.profile-details {
  background: #fff;
  border-radius: 32px;
  box-shadow: 0 2px 24px rgba(122,217,87,0.08);
  padding: 32px 32px 24px 32px;
  min-width: 380px;
  display: flex;
  flex-direction: column;
  gap: 32px;
}
.section-title {
  font-weight: 700;
  font-size: 1.1rem;
  margin-bottom: 12px;
  color: #222;
  text-align: left;
}
.program-list {
  list-style: none;
  padding: 0;
  margin: 0;
}
.program-list li {
  background: #eaffd5;
  color: #222;
  border-radius: 14px;
  padding: 12px 20px;
  margin-bottom: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: 500;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.2s;
}
.program-list li:hover {
  background: #d4f8b7;
}
.arrow {
  color: #7ad957;
  font-weight: bold;
}
.donation-section {
  margin-top: 12px;
}
.donation-history {
  background: #f4f4f4;
  border-radius: 14px;
  padding: 22px;
  text-align: center;
  color: #7a7a7a;
  font-size: 1rem;
}
.donation-history.empty {
  color: #7a7a7a;
  background: #f4f4f4;
}

.footer {
  background: #232c27;
  color: #fff;
  padding-top: 48px;
  padding-bottom: 16px;
  margin-top: 48px;
}
.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
  padding: 0 48px 24px 48px;
}
.footer-brand {
  max-width: 320px;
}
.footer-logo {
  width: 48px;
  margin-bottom: 10px;
}
.footer-desc {
  font-size: 1rem;
  margin-bottom: 18px;
}
.footer-socials a {
  color: #7ad957;
  font-size: 1.4rem;
  margin-right: 12px;
  transition: color 0.2s;
}
.footer-socials a:hover {
  color: #fff;
}
.footer-links {
  display: flex;
  gap: 60px;
}
.footer-section {
  min-width: 150px;
}
.footer-title {
  font-weight: 700;
  font-size: 1.1rem;
  margin-bottom: 10px;
}
.footer-section ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.footer-section li {
  margin-bottom: 8px;
}
.footer-section a {
  color: #fff;
  text-decoration: none;
  font-size: 1rem;
  transition: color 0.2s;
}
.footer-section a:hover {
  color: #7ad957;
}
.footer-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-top: 1px solid #3b4a41;
  padding: 12px 48px 0 48px;
  font-size: 0.95rem;
  margin-top: 16px;
}
.footer-policy a {
  color: #7ad957;
  margin: 0 8px;
  text-decoration: none;
  font-size: 0.95rem;
}
.footer-policy a:hover {
  text-decoration: underline;
}

@media (max-width: 900px) {
  .profile-container {
    flex-direction: column;
    align-items: center;
    gap: 24px;
  }
  .footer-content {
    flex-direction: column;
    gap: 32px;
  }
  .footer-bottom {
    flex-direction: column;
    gap: 8px;
    padding: 12px 16px 0 16px;
  }
}
</style>
