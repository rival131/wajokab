(function(){var d=this;function e(a,v){a=a.split(".");var b=d;a[0]in b||!b.execScript||b.execScript("var "+a[0]);for(var c;a.length&&(c=a.shift());)a.length||void 0===v?b[c]&&b[c]!==Object.prototype[c]?b=b[c]:b=b[c]={}:b[c]=v};var f={0:"Terjemahkan",1:"Batal",2:"Tutup",3:function(a){return"Google telah menerjemahkan laman ini secara otomatis ke: "+a},4:function(a){return"Diterjemahkan ke: "+a},5:"Kesalahan: Server tidak dapat melengkapi permintaan Anda. Coba lagi nanti.",6:"Pelajari lebih lanjut",7:function(a){return"Diberdayakan oleh "+a},8:"Terjemahan",9:"Penerjemahan sedang berlangsung",10:function(a){return"Terjemahkan laman ini ke: "+(a+" menggunakan Google Terjemahan?")},11:function(a){return"Lihat laman ini dalam bahasa: "+
a},12:"Tampilkan yang asli",13:"Konten file lokal ini akan dikirimkan ke Google untuk diterjemahkan menggunakan sambungan aman.",14:"Konten laman aman ini akan dikirimkan ke Google untuk diterjemahkan menggunakan sambungan aman.",15:"Konten laman intranet ini akan dikirimkan ke Google untuk diterjemahkan menggunakan sambungan aman.",16:"Pilih Bahasa",17:function(a){return"Matikan terjemahan "+a},18:function(a){return"Matikan untuk: "+a},19:"Selalu sembunyikan",20:"Teks asli:",21:"Sumbangkan terjemahan yang lebih baik",
22:"Sumbangkan",23:"Terjemahkan semua",24:"Pulihkan semua",25:"Batalkan semua",26:"Terjemahkan bagian ke dalam bahasa saya",27:function(a){return"Terjemahkan semuanya ke "+a},28:"Tampilkan bahasa asli",29:"Opsi",30:"Matikan terjemahan untuk situs ini",31:null,32:"Tunjukkan terjemahan alternatif",33:"Klik kata di atas untuk mendapatkan terjemahan alternatif",34:"Gunakan",35:"Seret dengan menekan tombol shift untuk menyusun ulang",36:"Klik untuk terjemahan alternatif",37:"Tahan tombol shift, klik, dan seret kata di atas untuk menyusun ulang.",
38:"Terima kasih telah atas kontribusi Anda berupa saran terjemahan pada Google Terjemahan.",39:"Kelola terjemahan untuk situs ini",40:"Klik kata untuk terjemahan alternatif, atau klik dua kali untuk langsung mengedit kata",41:"Teks asli",42:"Terjemahan",43:"Terjemahkan",44:"Perbaikan Anda telah dikirim.",45:"Kesalahan: bahasa laman web tidak didukung.",46:"Widget Terjemahan Bahasa"};var g=window.google&&google.translate&&google.translate._const;
if(g){var h;a:{for(var k=[],l=[""],m=0;m<l.length;++m){var n=l[m].split(","),p=n[0];if(p){var q=Number(n[1]);if(!(!q||.1<q||0>q)){var r=Number(n[2]),t=new Date,u=1E4*t.getFullYear()+100*(t.getMonth()+1)+t.getDate();!r||r<u||k.push({version:p,ratio:q,a:r})}}}var w=0,x=window.location.href.match(/google\.translate\.element\.random=([\d\.]+)/),y=Number(x&&x[1])||Math.random();for(m=0;m<k.length;++m){var z=k[m];w+=z.ratio;if(1<=w)break;if(y<w){h=z.version;break a}}h="TE_20170814_01"}var A="/element/%s/e/js/element/element_main.js".replace("%s",
h);if("0"==h){var B=" element %s e js element element_main.js".split(" ");B[B.length-1]="main_id.js";A=B.join("/").replace("%s",h)}if(g._cjlc)g._cjlc(g._pas+g._pah+A);else{var C=g._pas+g._pah+A,D=document.createElement("script");D.type="text/javascript";D.charset="UTF-8";D.src=C;var E=document.getElementsByTagName("head")[0];E||(E=document.body.parentNode.appendChild(document.createElement("head")));E.appendChild(D)}e("google.translate.m",f);e("google.translate.v",h)};}).call(window)
