<?php
$eljablo = [
    [
        'name' => 'R jay Senados',
        'age' => '21 years old',
        'location' => 'San Pedro Laguna',
        'description' => 'I\'m streamer and editor. I likes playing computer games and playing basketball',
        'image' => 'Jay.jpg',
        'alt' => 'R jay Senados'
    ],
    [
        'name' => 'Josh Andreu A. Malate',
        'age' => '21 years old',
        'location' => 'San Pedro Laguna',
        'description' => 'I like playing online games and Going on roadtrip',
        'image' => 'Josh.jpg',
        'alt' => 'Josh Andreu A. Malate'
    ],
    [
        'name' => 'Flores, John Andrew D.',
        'age' => '21 years old',
        'location' => 'GMA, Cavite',
        'description' => 'Mabait. Taylor swift songs enjoyer, matcha lover, kakampink',
        'image' => 'Drew.jpg',
        'alt' => 'John Andrew D. Flores'
    ]
];
?>
<!--html and css from 1st activity adding php -->
<html lang="en">
<head>
    <title>Group 1 Eljablo</title>
    <style>

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #404949 0%, #6a9f94 100%);
            min-height: 100vh;
            padding: 50px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            color: #1a1a1a;
            font-size: 3rem;
            font-weight: bold;
            text-align: left;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .spacing-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        .eskape-card {
            width: 300px;
            background: #2B4C8C;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .pic-section {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #667db6 0%, #0082c8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .pic-section img {
            width: 199px;
            height: 199px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .eskape-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
        }



        .button-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .action-btn {
            background: #2B4C8C;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .action-btn:hover {
            background: #1a3a6b;
        }

        .info {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .info-content {
            background-color: white;
            margin: 5% auto;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            text-align: center;
            position: relative;
        }

        .info-content::-webkit-scrollbar {
            width: 8px;
        }

        .info-content::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .info-content::-webkit-scrollbar-thumb {
            background: #2B4C8C;
            border-radius: 4px;
        }

        .info-content::-webkit-scrollbar-thumb:hover {
            background: #1a3a6b;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover {

            color: #000;

        }
        header {
            padding-bottom: 10px;
        }
        header h1 {
            text-align: center;
            margin: 10px auto;
            padding-bottom: 10px;
        }
        header form {
            width: 500px;
            margin: 0 auto;
            padding-bottom: 20px; 
        }
        .pos {
            display: flex;
            align-items: center;
            padding-left: 180px;
        }

    </style>

</head>

<body>

    <div class="container">
    <header><!-- header -->
        <h1>GROUP 1 ELJABLO</h1>
        <form action="activity.php" method="post" class="pos">
            <label for="searchbar">What's your name? <input type="text" id="searchbar" name="searchbar" /></label>
        </form>
    </header>

     <?php
        $search = isset($_POST["searchbar"]) ? $_POST["searchbar"] : null;

        if (isset($search)) { 
            $length = strlen($search);
        }

        if (isset($length)){
            switch($length){
                case 2:
                    echo "Hello ", $search, "<p style='color: white;'> Welcome to our group page,
                     we are so grateful for your support and everything you do. 
                    Your actions made a real difference and I deeply appreciate your thoughtful gesture. 
                    Thank you from the bottom of my heart. Also, having only 2 characters in your name means 
                    you are 2 months away from becoming what you have been wanting to be.</p>";
                    break;
                case 3:
                    echo "Hello ", $search, "<p style='color: white;'> Welcome to our group page,
                     we are so grateful for your support and everything you do. 
                    Your actions made a real difference and I deeply appreciate your thoughtful gesture. 
                    Thank you from the bottom of my heart. Also, having only 3 characters in your name means 
                    there are 3 persons who secretly love you.</p>";
                    break;
                case 4:
                    echo "Hello ", $search, "<p style='color: white;'> Welcome to our group page,
                     we are so grateful for your support and everything you do. 
                    Your actions made a real difference and I deeply appreciate your thoughtful gesture. 
                    Thank you from the bottom of my heart. Also, since you have exactly 4 characters in your name,
                    we will pray for your good health for the next 4 months.</p>";
                    break;
                case 5:
                    echo "Hello ", $search, "<p style='color: white;'> Welcome to our group page,
                     we are so grateful for your support and everything you do. 
                    Your actions made a real difference and I deeply appreciate your thoughtful gesture. 
                    Thank you from the bottom of my heart. Also, since you have 5 character name and you visited 
                    our page, we will give you 5 pesos for every 5 billion steps you make.</p>";
                    break;
                case 6:
                    echo "Hello ", $search, "<p style='color: white;'> Welcome to our group page,
                     we are so grateful for your support and everything you do. 
                    Your actions made a real difference and I deeply appreciate your thoughtful gesture. 
                    Thank you from the bottom of my heart. Also, having 6 characters in your name means you 
                    will be lucky for the next 6 century.</p>";
                    break;
                default:
                     echo "Hello ", $search, "<p style='color: white;'> Welcome to our group page,
                     we are so grateful for your support and everything you do. 
                    Your actions made a real difference and I deeply appreciate your thoughtful gesture. 
                    Thank you from the bottom of my heart. Your name is beautiful.</p>";
            }
        }
     ?>

        <!-- Action Buttons -->
        <div class="button-container">
            <button class="action-btn" onclick="showMemberInfo()">Member Info</button>
            <button class="action-btn" onclick="changePicture()">Change Picture</button>
            </div>

        <div class="spacing-container" id="membersContainer">
            <?php foreach ($eljablo as $sigbin): ?>
           <div class="eskape-card">
                 <div class="pic-section">
                    <img src="<?php echo $sigbin['image']; ?>" alt="<?php echo $sigbin['alt']; ?>">
                </div>
                <p style="color:black;">
                    <?php echo $sigbin['name']; ?><br>
                    <?php echo $sigbin['age']; ?><br>
                    Live in <?php echo $sigbin['location']; ?><br>
                    <?php echo $sigbin['description']; ?>
                </p>
                </div>
            <?php endforeach; ?>
            </div>

        <!-- info for Member Info -->
        <div id="memberinfo" class="info">
            <div class="info-content">
                <span class="close" onclick="closeinfo()">&times;</span>
                <h2 id="infoTitle">Member Information</h2>
                <div id="infoContent"></div>
                </div>
            </div>

        </div>

    <!-- JavaScript -->
    <script>
        // Member data from PHP
        const members = [
            {
                name: 'R jay Senados',
                age: '21 years old',
                location: 'San Pedro Laguna',
                description: 'I\'m streamer and editor. I likes playing computer games and playing basketball',
                image: 'Jay.jpg',
                alt: 'R jay Senados'
            },
            {
                name: 'Josh Andreu A. Malate',
                age: '21 years old',
                location: 'San Pedro Laguna',
                description: 'I like playing online games and Going on roadtrip',
                image: 'Josh.jpg',
                alt: 'Josh Andreu A. Malate'
            },
            {
                name: 'Flores, John Andrew D.',
                age: '21 years old',
                location: 'GMA, Cavite',
                description: 'Mabait. Taylor swift songs enjoyer, matcha lover, kakampink',
                image: 'Drew.jpg',
                alt: 'John Andrew D. Flores'
            }
        ];

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            addClickListeners();
        });





        // Show member information
        function showMemberInfo() {
            const info = document.getElementById('memberinfo');
            const infoTitle = document.getElementById('infoTitle');
            const infoContent = document.getElementById('infoContent');

            infoTitle.textContent = 'Info';

            let content = '<div style="text-align: left; line-height: 1.8; padding: 10px;">';
            content += '<h3 style="color: #2B4C8C; border-bottom: 2px solid #2B4C8C; padding-bottom: 10px;">Member Details:</h3>';

            members.forEach((member, index) => {
                content += `<div style="margin-bottom: 20px; padding: 15px; background: #f8f9fa; border-radius: 8px; border-left: 4px solid #2B4C8C;">`;
                content += `<p style="margin: 0 0 10px 0;"><strong style="color: #2B4C8C; font-size: 1.1em;">${index + 1}. ${member.name}</strong></p>`;
                content += `<ul style="margin: 0; padding-left: 20px;">`;
                if (member.age) content += `<li style="margin-bottom: 5px;">Age: ${member.age}</li>`;
                content += `<li style="margin-bottom: 5px;">Location: ${member.location}</li>`;
                content += `<li style="margin-bottom: 5px;">Description: ${member.description}</li>`;
                content += `</ul>`;
                content += `</div>`;
            });

            content += '<h3 style="color: #2B4C8C; border-bottom: 2px solid #2B4C8C; padding-bottom: 10px; margin-top: 30px;">Group Statistics:</h3>';
            content += `<div style="background: #e3f2fd; padding: 15px; border-radius: 8px; margin-top: 15px;">`;
            content += `<p style="margin: 8px 0;"><strong>• Total Members:</strong> ${members.length}</p>`;
            content += `<p style="margin: 8px 0;"><strong>• Members with Age:</strong> ${members.filter(m => m.age).length}</p>`;
            content += `<p style="margin: 8px 0;"><strong>• Unique Locations:</strong> ${new Set(members.map(m => m.location)).size}</p>`;
            content += `</div>`;
            content += '</div>';

            infoContent.innerHTML = content;
            info.style.display = 'block';
        }

                // Close info
        function closeinfo() {
            document.getElementById('memberinfo').style.display = 'none';
        }

        // Change picture function
        function changePicture() {
            const info = document.getElementById('memberinfo');
            const infoTitle = document.getElementById('infoTitle');
            const infoContent = document.getElementById('infoContent');

            infoTitle.textContent = 'Info';

            let content = '<div style="text-align: center; padding: 20px;">';
            content += '<h3 style="color: #2B4C8C; margin-bottom: 30px;">Select Member to Change Picture</h3>';

            // Create member selection buttons
            members.forEach((member, index) => {
                content += `<div style="margin-bottom: 20px; padding: 15px; background: #f8f9fa; border-radius: 10px; border: 2px solid #e9ecef;">`;
                content += `<img src="${member.image}" alt="${member.alt}" style="width: 80px; height: 80px; border-radius: 50%; margin-bottom: 10px; object-fit: cover;">`;
                content += `<h4 style="margin: 10px 0; color: #2B4C8C;">${member.name}</h4>`;
                content += `<button class="action-btn" onclick="selectMemberForPicture(${index})" style="margin: 5px;">Select This Member</button>`;
                content += '</div>';
            });

            content += '</div>';
            infoContent.innerHTML = content;
            info.style.display = 'block';
        }

        // Select member for picture change
        function selectMemberForPicture(memberIndex) {
            const info = document.getElementById('memberinfo');
            const infoTitle = document.getElementById('infoTitle');
            const infoContent = document.getElementById('infoContent');
            const member = members[memberIndex];

            infoTitle.textContent = 'Info';

            let content = '<div style="text-align: center; padding: 20px;">';
            content += `<h3 style="color: #2B4C8C; margin-bottom: 20px;">Current Picture</h3>`;
            content += `<img src="${member.image}" alt="${member.alt}" style="width: 150px; height: 150px; border-radius: 50%; margin-bottom: 20px; object-fit: cover; border: 3px solid #2B4C8C;">`;

            content += '<h3 style="color: #2B4C8C; margin: 30px 0 20px 0;">Choose New Picture</h3>';

            // Option 1: Upload from device
            content += '<div style="margin-bottom: 30px;">';
            content += '<h4 style="color: #2B4C8C; margin-bottom: 15px;">Upload from Device</h4>';
            content += `<input type="file" id="pictureUpload" accept="image/*" style="display: none;" onchange="handleFileUpload(event, ${memberIndex})">`;
            content += `<button class="action-btn" onclick="document.getElementById('pictureUpload').click()">Choose File</button>`;
            content += '<p style="font-size: 0.9em; color: #666; margin-top: 10px;">Supported formats: JPG, PNG, GIF</p>';
            content += '</div>';

            // Back button
            content += '<button class="action-btn" onclick="changePicture()" style="background: #6c757d;">Back to Member Selection</button>';
            content += '</div>';

            infoContent.innerHTML = content;

         }

        // Handle file upload
        function handleFileUpload(event, memberIndex) {
            const file = event.target.files[0];
            if (file) {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        updateMemberPicture(memberIndex, e.target.result);
                    };
                    reader.readAsDataURL(file);
                } else {
                    alert('Please select a valid image file.');
                }
            }
        }

        // Update member picture
        function updateMemberPicture(memberIndex, newImageUrl) {
            // Update the member data
            members[memberIndex].image = newImageUrl;

            // Update the card image
            const cards = document.querySelectorAll('.eskape-card');
            const targetCard = cards[memberIndex];
            const img = targetCard.querySelector('img');

            // Add transition effect
            img.style.transition = 'opacity 0.3s ease';

            img.style.opacity = '0';

            setTimeout(() => {
                img.src = newImageUrl;
                img.style.opacity = '1';

                // Show success message
                showNotification(`Picture updated for ${members[memberIndex].name}!`);

                // Close info
                closeinfo();
            }, 300);
        }

        // Show notification
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: #28a745;
                color: white;
                padding: 15px 20px;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.3);
                z-index: 10000;
                font-size: 14px;
                font-weight: bold;
                transform: translateX(100%);
                transition: transform 0.3s ease;
            `;
            notification.textContent = message;

            document.body.appendChild(notification);

            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);

            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Add click listeners to cards
        function addClickListeners() {
            const cards = document.querySelectorAll('.eskape-card');
            cards.forEach((card, index) => {
                card.addEventListener('click', function() {
                    showMemberDetail(members[index]);
                });
            });
        }

        // Show individual member detail
        function showMemberDetail(member) {
            const info = document.getElementById('memberinfo');
            const infoTitle = document.getElementById('infoTitle');
            const infoContent = document.getElementById('infoContent');

            infoTitle.textContent = 'Info';

            let content = '<div style="text-align: center; padding: 20px;">';
            content += `<img src="${member.image}" alt="${member.alt}" style="width: 150px; height: 150px; border-radius: 50%; margin-bottom: 20px; border: 4px solid #2B4C8C; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">`;
            content += `<h3 style="color: #2B4C8C; margin-bottom: 20px;">${member.name}</h3>`;

            content += '<div style="background: #f8f9fa; padding: 20px; border-radius: 10px; text-align: left; margin-top: 20px;">';
            if (member.age) content += `<p style="margin: 10px 0; font-size: 1.1em;"><strong style="color: #2B4C8C;">Age:</strong> ${member.age}</p>`;
            content += `<p style="margin: 10px 0; font-size: 1.1em;"><strong style="color: #2B4C8C;">Location:</strong> ${member.location}</p>`;
            content += `<p style="margin: 10px 0; font-size: 1.1em;"><strong style="color: #2B4C8C;">About:</strong> ${member.description}</p>`;
            content += '</div>';

            content += '</div>';

            infoContent.innerHTML = content;
            info.style.display = 'block';
        }

        // Close info when clicking outside
        window.onclick = function(event) {
            const info = document.getElementById('memberinfo');
            if (event.target === info) {
                info.style.display = 'none';
            }
        }

    </script>

</body>

</html>
