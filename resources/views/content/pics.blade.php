@extends('frame/frame')

@section('home')
<body>
    <div class="All">
        <div class="pics">
            <div class="employees">
                <img src="https://i.pinimg.com/564x/10/22/78/102278660b036c313373087b75b60a54.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/564x/e6/89/47/e689476d68157a3b33961489db179a81.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/564x/7e/89/0e/7e890e5bdae7e7157676fe5d8af3230e.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/236x/14/f1/93/14f19348ec6fb9af42ec317620ec7384.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/236x/72/13/a6/7213a67022d37e98328050d8f46cf560.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/236x/ca/b4/40/cab440b48c8c797d2f4a710db634ae5a.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/236x/cf/fa/83/cffa83ebe67a00b3dfead14ce35060e9.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/236x/cf/d1/54/cfd1545667d7a05245981e4ec3ada4cb.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/236x/69/1e/b9/691eb992bf2d64177d47772f08c5778f.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/236x/03/66/38/036638d18c9c3ffca85c87dbda361ce3.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/236x/96/95/2b/96952b35f85483b52842e0b5167b4b0f.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>
            <div class="employees">
                <img src="https://i.pinimg.com/236x/52/e1/07/52e1077f2b01bf16b3b0268a33e57e96.jpg" alt="" class="employee">
                <div class="employeeName"></div>
            </div>

        </div>
        <div class="intro">
            <div class="selfive"></div>
            <div class="Content">
                <!-- <div class="Name"></div>
                <div class="Specialist"></div>
                <div class="History"></div> -->
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        var Names = [];
        var Specialist = [];
        var History = [];
        let Content = '';
        let Context = '';
        for (var i = 0; i < 12; i++) {
            Names[i] = 'emplyee' + i;
            Specialist[i] = 'Specialist' + i;
            History[i] = 'History' + i;
        }
        $('.employees').click(function() {
            if ($(this).hasClass('active') == false) {
                $('.employees').removeClass('active').removeClass('grow')
                $(this).addClass('active');
                setTimeout(() => {
                    if ($(this).hasClass('active') == true) {
                        $(this).addClass('grow')
                    }

                }, 1000);
                if ($(this).hasClass('active') == false) {
                    Content = ""
                } else {
                    Content =
                        `
                <div class="Name"><h2>${Names[$(this).index()]}</h2></div>
                <div class="Specialist"><h3>${Specialist[[$(this).index()]]}</h3></div>
                <div class="History"><h3>${History[$(this).index()]}</h3></div>
            `
                }
                $('.Content').html(Content)

            } else {
                $('.employees').removeClass('active').removeClass('grow')
            }
        })
    </script>
</body>
@endsection



