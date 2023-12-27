@extends('layout.main3')
@section('content')

<div class="container">

    <div class="receipt">
        <div class="profile-section" style="display: flex; justify-content: space-between; align-items: center; background-color: #7D1219; padding: 10px;">
            <a href="{{ route('home') }}" style="text-decoration: none;">
                <h1 class="title-glucosync" style="margin: 0;">GlucoSync</h1>
            </a>

            <div class="profile-details">
                <a href="/profile" style="display: flex; align-items: center; text-decoration: none;">
                    <div class="doctor-pic-container">
                        <img src="img/profile.jpg" alt="Profile Image" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 8px;">
                    </div>
                    <div class="profile-info">
                        <h2 class="profile-name" style="font-size: 1rem; margin-bottom: 5px; color:#fff; text-align: right;">Hi, {{ auth()->check() ? auth()->user()->name : 'Guest' }}!</h2>
                        <!-- Informasi lainnya sesuai kebutuhan -->
                    </div>
                </a>
            </div>
        </div>
    </div>


    <div class="receipt-container">

        <div class="box">
            <!-- Informasi Dokter -->
            <div class="doctor-info">
                <div class="doctor-pic-container" style="width: 45px; height: 45px; overflow: hidden; border-radius: 50%;">
                    <img src="{{ asset('medisimg/'. $doctor->image) }}" alt="{{ $doctor->image }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="doctor-details">
                    <p class="doctor-name">{{ $doctor->nama_medis }}</p>
                    <p class="doctor-specialization" style="color: #7D1219;">{{ $doctor->spesialisasi_medis }}</p>
                    <hr style="border-top: 1px solid #ccc; margin: 10px 0;">
                </div>
                {{-- <div class="navbar-item navbar-left" style="line-height: 40px;">
                    <p style="font-size: 20px; text-align: center; margin: 0;">Konsultasi untuk:</p>
                </div> --}}
                <div class="navbar-item navbar-right">
                    @if(session('nama_pasien'))
                        <p style="text-align: center; line-height: 40px;">
                            <span style="font-weight: 600; font-size: 18px;">Pasien:</span>
                            <span style="font-weight: 500; font-size: 18px; vertical-align: middle;"> {{ session('nama_pasien') }}</span>
                            <a href="{{ route('pilihan_pasien') }}" style="margin-left: 10px;">Ganti</a>
                        </p>
                    @endif
                </div>
            </div>

            <!-- Informasi Pembayaran -->
            <div class="payment-summary">
                <div class="fee-container">
                    <span class="fee">Biaya Sesi (1 Jam)</span>
                    <span class="fee">Rp 99.000</span>
                </div>
                <div class="fee-container">
                    <span class="fee">Biaya Layanan</span>
                    <span class="fee">Rp 1.000</span>
                </div>
                <div class="total-amount">
                    <span class="total-label">Total Pembayaran</span>
                    <span class="total-fee">Rp {{ number_format($totalPembayaran, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>
    </div>


        <!-- Tombol Konfirmasi -->
        <div class="confirm-box">
            <button id="pay-button" class="btn-confirm">Bayar!</button>
        </div>
    </div>

    <!-- Script untuk menangani pembayaran -->
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            window.snap.pay('{{$snapToken}}', {
                // onSuccess: function(result){
                //     var waNumber = '6285854926835'; // Nomor WhatsApp tujuan
                //     var waURL = 'https://api.whatsapp.com/send?phone=' + waNumber;
                //     window.open(waURL, '_blank');
                //     console.log('Pembayaran berhasil!');
                //     console.log(result);
                // },
                onSuccess: function(result){
                    var waNumber = '6281525954792'; // Nomor WhatsApp tujuan
                    var waURL = 'https://api.whatsapp.com/send?phone=' + waNumber;
                    window.open(waURL, '_blank');
                    console.log('Pembayaran berhasil!');
                    console.log(result);
                    localStorage.setItem('paymentStatus', 'onSuccess');
                    // Redirect ke halaman struk setelah pembayaran berhasil
                    // Mengarahkan pengguna ke halaman 'struk' menggunakan route yang telah Anda tentukan
                    window.location.href = "{{ route('home') }}";


                },
                onPending: function(result){
                    alert("Menunggu pembayaran!");
                    console.log(result);
                },
                onError: function(result){
                    alert("Pembayaran gagal!");
                    console.log(result);
                },
                onClose: function(){
                    alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                }
            })
        });
    </script>
</div>
@endsection

<style>

<style>
    .receipt-wrapper {
    width: 300px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-family: 'Jost', sans-serif;
    background-color: #fff;
}

.receipt {
    padding: 20px;
}

.profile-section {
    margin-bottom: 20px;
    text-align: center;
}

.title-glucosync {
    color: #ffff;
    font-size: 1.8rem;
    margin-bottom: 20px;
    font-weight: bold;
}

.profile-details {
    display: flex;
    align-items: center;
    justify-content: center;
}

.doctor-pic-container {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 8px;
}

.doctor-avatar {
    width: 100%;
    height: auto;
}

.profile-info {
    margin-left: 10px;
}

.profile-info h2 {
    font-size: 1rem;
    margin-bottom: 5px;
    color: #333;
}

.profile-info p {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 0;
}

    .receipt-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    .box {
        width: 450px;
        padding: 20px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-bottom: 20px;
        background-color: #f8f9fa;
        color: #333;
    }

    .doctor-info {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .doctor-avatar {
        width: 80px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .doctor-details p {
        margin: 5px 0;
    }

    .payment-summary {
        margin-top: 20px;
    }

    .fee-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .fee-label {
        font-weight: bold;
    }

    .total-amount {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .total-label {
        font-weight: bold;
        font-size: 18px;
    }

    .total-fee {
        font-weight: bold;
        font-size: 18px;
    }

    .confirm-box {
        display: flex;
        justify-content: center;
    }

    .btn-confirm {
        background-color: #7D1219;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        cursor: pointer;
        border: none;
        font-weight: bold;
        font-size: 16px;
    }

    .btn-confirm:hover {
        background-color: #a72828;
    }

    .profile-section {
        text-align: center;
        margin-top: 40px;
    }

    .title-glucosync {
        color: #fff;
        font-size: 2.5rem;
        margin-bottom: 20px;
        font-weight: bold;

    }

    .profile-details {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-picture {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .profile-info h2 {
        font-size: 1.8rem;
        margin-bottom: 5px;
        color: #333;

    }

    .profile-info p {
        font-size: 1.2rem;
        color: #666;
        margin-bottom: 0;

    }
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    a {
        font-family: 'Jost', sans-serif;
        /* Sesuaikan ukuran font dan properti lainnya jika diperlukan */
    }
</style>
