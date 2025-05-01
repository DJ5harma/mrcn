<html>

<head>
    <title>MRCN-2025 | UIET-KUK </title>
    <link rel="stylesheet" href="tailwind.css">
</head>

<body class="antialiased flex flex-col justify-between h-screen">

    <?php
    include("components/common/TopNav.php");
    ?>

    <div class="flex flex-col w-full flex-1 pb-4 [&>div]:border-t-8 gap-4">

        <!-- IntroHeader -->
        <div class="relative flex flex-col items-center pt-4 font-semibold gap-4 text-white border-white" style="
            background-image: linear-gradient(to top left, red, rgb(190, 0, 80));">
            <div class="flex items-center gap-2 w-full justify-around">
                <a target="_blank" href="https://www.uietkuk.ac.in/">
                    <image src="images/logo.png" alt="logo.png" width=80 height=80 class="lg:w-28" />
                </a>
                <div class="flex flex-col items-center">
                    <h2>6th International Conference on</h2>
                    <h2 class="p-4 my-2 bg-white text-black">
                        Mobile Radio Communication & 5G Networks - 2025
                    </h2>
                </div>
                <a target="_blank" href="https://www.springer.com/">
                    <image src="/images/springer_logo.png" alt="springer logo" width=80 height=80
                        class="rounded-full lg:w-28" />
                </a>
            </div>
            <h2 class="bg-gray-700 py-2 px-4">22nd-23rd August-2025</h2>
            <h2>U.I.E.T. - KUK</h2>
            <div class="flex flex-col gap-4 bg-red-700 p-4 w-full">
                <h3>
                    Organised by: Department of Electronics & Communication Engineering,
                </h3>
                <h3>University Institute of Engineering & Technology</h3>
                <h3>
                    (A constituent Autonomous Institute and Recognized by UGC under
                    section 12(B) And 2(F))
                </h3>
                <h3>Kurukshetra University, Kurukshetra, Haryana</h3>
                <h3>(Established by the State Legislature Act XII of 1956)</h3>
            </div>
        </div>


        <?php
        include("components/About3.php");
        include("components/CallForPapers.php");
        include("components/ImportantDates.php");
        include("components/SubmitPapers.php");
        ?>

        <div class="flex flex-wrap w-full justify-around items-center">
            <?php include("components/RegistrationSection.php"); ?>
        </div>

        <?php
        include("components/InternationalAdvisoryCommitee.php");
        include("components/TechnicalProgramCommitee.php");
        include("components/OrganizingCommitee.php");
        include("components/EventLocation.php");
        include("components/PastConferences.php");
        ?>

    </div>

    <?php include 'components/common/Footer.php' ?>

</body>

</html>