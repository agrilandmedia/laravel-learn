<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Learn</title>
        <link rel="stylesheet" href="/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Posts</h1>
        <article>
            <a href="/posts/first-post">
                <h3>Tractor Stolen and Damaged in Co. Laois</h3>
                <p>
                    A tractor was stolen from a farmyard in Co. Laois this week and was then found with a damaged steering
                    column and the interior of the cab covered in diesel.
                    It comes amid what is described as “a few incidents” of similar occurrences of vehicle theft and damage 
                    near Mountrath, Co. Laois. Farmer Jimmy Dunne told Agriland that he noticed his tractor was missing from 
                    his yard in Trumera, a short distance from Mountrath, yesterday morning (Tuesday, November 16) at around 
                    8:30a.m.
                </p>
            </a>
        </article>
        <article>
            <a href="/posts/second-post">
                <h3>Grass Growth</h3>
                <p>
                    Looking back, 2021 will be described as an ‘up and down year’ for grass growth, but on most farms, 
                    a good year for milk production. It is now mid-November, although that is hard to believe due to the relatively 
                    mild weather currently being experienced. Ground conditions are now soft under foot, with most farming heavier-land
                    now having animals housed for the winter months. That being said, many on drier farms, are continuing to get cows 
                    out to grass. But it is important to know when to stop and house cows for the winter months.
                </p>
            </a>
        </article>
        <article>
            <a href="/posts/third-post">
                <h3>EU Budget for 2022</h3>
                <p>
                    The European Parliament and the Council of the European Union have provisionally agreed on an EU budget for 2022 
                    that will prioritise fighting climate change and economic recovery. As part of the budget for the coming year, 
                    €53.1 billion has been allocated for the Common Agricultural Policy (CAP), while €971.9 million will go to the 
                    European Maritime, Fisheries, and Aquaculture Fund, for Europe’s farmers and fishermen. The overall EU budget 
                    agreed for 2022 is €169.5 billion, and payments of €170.6 billion.
                </p>
            </a>
        </article>
    </body>
</html>
