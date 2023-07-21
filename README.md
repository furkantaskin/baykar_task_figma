# Baykar Figma Design

 Birincil figma görevi için hazırlanan projenin [Vercel'e deploy edilmiş hali](https://baykarfigma.vercel.app/) incelenebilir. 

 Proje, kendim tarafından geliştirilen [mufferplate](https://github.com/furkantaskin/mufferplate) ile oluşturulmuştur.

## Kullanılan Yapılar

- Bootstrap
- Swiperjs
- esbuild
- Sass (SCSS)
- GLightbox


Sistem üzerinde mümkün olduğunca minimize boyutlarda bir CSS ve JS oluşturmak için esbuild ve SCSS birlikte kullanıldı. SCSS kısmında 7-1 mimarisi özelleştirilerek kullanıldı. Özel olarak oluşturduğum mixin'ler ile responsive diğer işlemlerde (transition ekeme, scrollbar kaldırma) mümkün olduğunca hızlı bir şekilde stillendirme yapılması sağlandı. 

JavaScript kısmında yoğunluğa sebep olunmaması için esbuild ile modüler yapılar kullanılarak kod kalabalığı ve işlem yükünün önüne geçildi. Projeye ait HTMl formatı dist klasörü içinden temin edilebilir.

PageSpeed ve GTMetrix verilerine göre sistem PageSpeed üzerinde mobil için 80 ile 95 arası ve masaüstü için 90-99 arası skorlar elde ederken bu sayı GTMetrix üzerinde 100 olmakta. 