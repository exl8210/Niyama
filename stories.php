<?php include( "header.php"); ?>

    <script type="text/javascript">
        /*
                Grid - resize rows dynamically
            */

        window.onload = resizeAllGridItems;
        window.addEventListener("resize", resizeAllGridItems);

        function resizeGridItem(item) {
            grid = document.getElementsByClassName("grid")[0];
            rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
            rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
            rowSpan = Math.ceil((item.querySelector('.story-content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
            item.style.gridRowEnd = "span " + rowSpan;
        }

        function resizeAllGridItems() {
            allItems = document.getElementsByClassName("story");
            for (x = 0; x < allItems.length; x++) {
                resizeGridItem(allItems[x]);
            }
            
            $("#stories").animate({
                marginTop: "-20px",
                opacity: 1
            }, 500);
        }

    </script>

    <!-- Real Stories -->
    <div class="row" id="stories-intro">
        <div class="offset-by-one four columns" id="stories-intro-text">
            <h1>Real Stories</h1>
            <p>We compiled stories from real people, before and after our Imagine RIT exhibit, about how acts of kindness made their days.</p>
            <p>At the moment, sourced from <a href="http://www.randomactsofkindness.org" target="_blank">Random Acts of Kindness</a>, <a href="https://www.rd.com/true-stories/inspiring/kindness-strangers/" target="_blank">Reader's Digest</a>, and <a href="http://www.filtercopy.com/10-honest-short-stories-that-will-make-your-heart-melt-2473424234.html" target="_blank">Filter Copy</a></p>
        </div>
    </div>

    <div class="u-cf small-vert-space"></div>

    <div id="stories" class="pre-show">
        <div class="row grid offset-by-one ten columns" id="stories-container">
            <div class="story">
                <div class="story-content">
                    <h2>The Man at the Market</h2>
                    <p>When the supermarket clerk tallied up my groceries, I was $12 over what I had on me. I began to remove items from the bags, when another shopper handed me a $20 bill. “Please don’t put yourself out,” I told him. “Let me tell you a story,” he said. “My mother is in the hospital with cancer. I visit her every day and bring her flowers. I went this morning, and she got mad at me for spending my money on more flowers. She demanded that I do something else with that money. So, here, please accept this. It is my mother’s flowers.”</p>

                    <span>Submitted by <a href="https://www.rd.com/true-stories/inspiring/kindness-strangers/" target="_blank">Leslie Wagner</a></span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Simply Kind</h2>
                    <p>Isaac has a rare medical condition called Hypopituitarism. He is on daily medicine and daily injections, not that you would know it. Throughout all his hospital trips and visits, Isaac’s main concern has been me, the nurses, school—anything and anyone other than him.</p>

                    <p>This year, at the age of 15, he was supposed to be going on a school trip to China. A two-year long, anticipated trip from UK to China. He got a job, he saved up, he started Mandarin lessons, he started a count down timer. He used chop sticks.</p>

                    <p>With five weeks to go until he was due to leave, the school retracted his place on the trip because they did not feel they could take him with his health concerns. Telling him the news was the hardest thing I have EVER done. Heartbreak and disappointment do not cover the look on his face as I told him he would not be going with his friends to China, he would be staying at home because they cannot take him. As he saw me crying and my look of total helplessness at the situation, he simply said: "Let me get a tissue, your tears are going on your jeans, I will be OK". After I explained the situation to him he asked to speak to the school directly. Not to be angry or cross, not to vent frustration but he wanted to talk to them about why it’s happened so they can change it so no one else gets disappointed.</p>

                    <p>That’s who he is. That’s who he always is. Pretty amazing and to me the epitome of KIND to the core.</p>

                    <span>Submitted by <a href="https://www.randomactsofkindness.org/rak-week" target="_blank">Kate</a></span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Seven Miles For Me</h2>
                    <p>Leaving a store, I returned to my car only to find that I’d locked my keys and cell phone inside. A teenager riding his bike saw me kick a tire and say a few choice words. “What’s wrong?” he asked. I explained my situation. “But even if I could call my wife,” I said, “she can’t bring me her car key, since this is our only car.” He handed me his cell phone. “Call your wife and tell her I’m coming to get her key.” “That’s seven miles round trip.” “Don’t worry about it.” An hour later, he returned with the key. I offered him some money, but he refused. “Let’s just say I needed the exercise,” he said. Then, like a cowboy in the movies, he rode off into the sunset.</p>

                    <span>Submitted by <a href="https://www.rd.com/true-stories/inspiring/kindness-strangers/" target="_blank">Clarence W. Stephens</a></span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>The Little Lift</h2>
                    <p>One evening, I left a restaurant just ahead of a woman assisting her elderly mom. I approached the curb and paused to see if my arthritic knees could climb it. To my right appeared an arm to assist. It was that of the elderly mom. My heart was so touched.</p>

                    <span>Submitted by <a href="https://www.rd.com/true-stories/inspiring/kindness-strangers/" target="_blank">Donna Moerie</a></span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>My Granddaughter's Dress</h2>
                    <p>I saw a dress in a consignment shop that I knew my granddaughter would love. But money was tight, so I asked the store owner if she could hold it for me. “May I buy the dress for you?” asked another customer. “Thank you, but I can’t accept such a gracious gift,” I said. Then she told me why it was so important for her to help me. She’d been homeless for three years, she said, and had it not been for the kindness of strangers, she would not have been able to survive. “I’m no longer homeless, and my situation has improved,” she said. “I promised myself that I would repay the kindness so many had shown me.” She paid for the dress, and the only payment she would accept in return was a heartfelt hug.</p>

                    <span>Submitted by <a href="https://www.rd.com/true-stories/inspiring/kindness-strangers/" target="_blank">Stacy Lee</a></span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>White Shoulders</h2>
                    <p>A woman at our yard sale wore a perfume that smelled heavenly and familiar. “What are you wearing?” I asked. “White Shoulders,” she said. Suddenly, I was bowled over by a flood of memories. White Shoulders was the one gift I could count on at Christmas from my late mother. We chatted awhile, and she bought some things and left. A few hours later, she returned holding a new bottle of White Shoulders. I don’t recall which one of us started crying first.</p>

                    <span>Submitted by <a href="https://www.rd.com/true-stories/inspiring/kindness-strangers/" target="_blank">Media Stooksbury</a></span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>"I Can Still Help"</h2>
                    <p>As I walked through the parking lot, all I could think about was the dire diagnosis I had handed my patient Jimmy: pancreatic cancer. Just then, I noticed an elderly gentleman handing tools to someone working under his stalled car. That someone was Jimmy. “Jimmy, what are you doing?” I yelled out. Jimmy dusted off his pants. “My cancer didn’t tell me not to help others, Doc,” he said, before waving at the old man to start the car. The engine roared to life. The old man thanked Jimmy and drove off. Then Jimmy got into his car and took off as well. Take-home message: Kindness has no limits and no restrictions. </p>

                    <span>Submitted by <a href="https://www.rd.com/true-stories/inspiring/kindness-strangers/" target="_blank">Mohammed Basha</a></span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Top Note</h2>
                    <p>When my husband died unexpectedly, a coworker took me under her wing. Every week for an entire year, she would send me a card saying “Just Thinking of You” or “Hang in There.” She saved my life.</p>

                    <span>Submitted by <a href="https://www.rd.com/true-stories/inspiring/kindness-strangers/" target="_blank">Jerilynn Collette</a></span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Accidental Message</h2>
                    <p>Today, I chose the wrong number and accidentally sent my dad a message saying "I love you," which was meant for my husband. A few minutes later I got a reply: "I love you too. Dad." It was so touching. We say things like that to each other so rarely.</p>

                    <span>Submitted by <a href="http://www.filtercopy.com/10-honest-short-stories-that-will-make-your-heart-melt-2473424234.html" target="_blank">Anonymous</a></span>
                </div>
            </div>
            <!--
            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>
            -->

        </div>
    </div>

    <?php include( "footer.php"); ?>
