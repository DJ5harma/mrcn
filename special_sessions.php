<html>

<head>
    <title>Special Sessions - MRCN 2025</title>
    <link rel="stylesheet" href="tailwind.css">
</head>

<body>

    <?php
    include("components/common/TopNav.php");
    ?>

    <div className="flex flex-col p-4" style="margin: 20px 0;">
        <h1>List of Confirmed Special Sessions</h1>
        <p>
            Papers submitted for special sessions will be peer reviewed in the same
            way as submissions to the regular sessions.
        </p>
    </div>

    <table class="border-collapse w-full">
        <thead class="bg-black text-white">
            <tr>
                <th class="border p-2">Name</th>
                <th class="border p-2">Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border flex flex-col gap-2 p-2">
                    <p>Dr. Sugandha Singh</p>
                    <p>Dr. Manoj Kumar</p>
                    <p>Dr. Urmila Pilania</p>
                </td>
                <td class="border p-2 bg-gray-200">
                    <a href="special_sessions/(Dr.) Sugandha Singh.docx" download>Download</a>
                </td>
            </tr>
            <tr>
                <td class="border p-2 bg-gray-200">Avinash Sharma</td>
                <td class="border">
                    <a href="special_sessions/Avinash Sharma-special session.docx" download>Download</a>
                </td>
            </tr>
            <tr>
                <td class="border flex flex-col gap-2 p-2">
                    <p>Dr. Tejinder Kaur</p>
                    <p>Dr. Pradosh Kumar Gantayat</p>
                </td>
                <td class="border p-2 bg-gray-200">
                    <a href="special_sessions/Dr. Tejinder Kaur.docx" download>Download</a>
                </td>
            </tr>
            <tr>
                <td class="border p-2 bg-gray-200">Dr. Rohit Tanwar</td>
                <td class="border ">
                    <a href="special_sessions/Dr. ROHIT TANWAR.docx" download>Download</a>
                </td>
            </tr>
            <tr>
                <td class="border flex flex-col gap-2 p-2">
                    <p>Dr. Deepali Gupta</p>
                    <p>Dr. Mudita</p>
                </td>
                <td class="border p-2 bg-gray-200">
                    <a href="special_sessions/Dr. Deepali Gupta.docx" download>Download</a>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Footer -->
    <?php include 'components/common/Footer.php' ?>

</body>

</html>