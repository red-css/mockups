<!DOCTYPE html>
<html>
<head>
    <title>Clever Title</title>
    <link rel="icon" type="image/png" href="_img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dog food cat food">
    <meta name="robots" content="index, follow">
    <link href="_css/normalize.css" media="all" rel="stylesheet" type="text/css" />  
    <link href="_css/style.css" media="all" rel="stylesheet" type="text/css" />  

<body>
    <div class='header-wrapper'>
        <header>
            <div class='header__logo'>
                <a href='#' title='Go home'></a>
            </div>
            <div class='header__fill'>
                <div class='header__search'>
                    <form>
                        <label class='faux-search'>
                            <input type='search' name='search' id='header_searchbar' class='header__searchbar' placeholder='Search' />
                            <div class='header__search-suggestions'>Search artists or whatever</div>
                        </label>
                    </form>
                </div>
                <div class='header__menu'>
                    <nav>
                        <a href="#">Torrents</a>
                        <a href="#">Artists</a>
                        <a href="#">Requests</a>
                        <a href="#">Forums</a>
                        <a href="#">Collages</a>
                        <a href="#">Wiki</a>
                    </nav>
                </div>
            </div>
            <div class='header__alerts'>
                <label for='toggle-right-sidebar' class='toggle-notifications-button' title='Alerts'></label>
            </div>
            <div class='header__user'>
                <a href="#" title='User'>user</a>
            </div>
        </header>
    </div>

    <div class='application-main'>
        <div class='main'>
            <aside class='sidebar-left'>
                <div class='sidebar-left__user'>
                    <div class='sidebar-left__user--image'>
                        <img src='' alt='' />
                    </div>
                    <div class='sidebar-left__user--content'>
                        <a href='#'>Username</a>
                        <span>Elite</span>
                    </div>
                    <div class='sidebar-left__user--toggle'>
                        <label></label>
                    </div>
                    <form>
                        <ul>
                            <li>Your Settings</li>
                            <li>Your Uploads</li>
                            <li>Your Posts</li>
                            <li>Your Friends</li>
                            <li>Logout</li>
                        </ul>
                    </form>

                </div>
                
                <ul>
                    <li>Inbox</li>
                    <li>Bookmarks</li>
                    <li>Notifications</li>
                    <li>Subscriptions</li>
                    <li>Comments</li>
                </ul>

            </aside>
            <div class='content'>
                <h1>Content</h1>
                <div>
                <p>Perhaps in preparation for his crusade, Frederick married Adelaide of Vohburg sometime before March 1147. His father died on 4 or 6 April and Frederick succeeded to the Duchy of Swabia. The German crusader army departed from Regensburg seven weeks later.</p>

                <p>In August 1147, while crossing the Byzantine Empire, an ill crusader stopped in a monastery outside Adrianople to recuperate. There he was robbed and killed. Conrad ordered Frederick to avenge him. The duke of Swabia razed the monastery, captured and executed the robbers and demanded a return of the stolen money. The intervention of the Byzantine general Prosuch prevented a further escalation.</p>

                <p>A few weeks later, on 8 September, Frederick and Welf VI were among the few German crusaders spared when flash flooding destroyed the main camp. They had encamped on a hill away from the main army. The army reached Constantinople the following day.</p>

                <p>Conrad III attempted to lead the army overland across Anatolia. Finding this too difficult in the face of constant Turkish attacks near Dorylaeum, he turned back. The rearguard was subsequently annihilated. Conrad sent Frederick ahead to inform King Louis VII of France of the disaster and ask for help. The two armies, French and German, then advanced together. When Conrad fell ill at Christmas in Ephesus, he returned to Constantinople by ship with his main followers, including Frederick.</p>

                <p>With Byzantine ships and money, the German army left Constantinople on 7 March 1148 and arrived in Acre on 11 April. After Easter, Conrad and Frederick visited Jerusalem, where Frederick was impressed by the charitable works of the Knights Hospitaller. He took part in the council that was held at Palmarea on 24 June, where it was decided to attack Damascus.</p>
                </div>
            </div>

            <form class='form-toggle-right-sidebar'>
                <input type='checkbox' id='toggle-right-sidebar'>
                <aside class='sidebar-right'>
                    <div class='sidebar-right__content'>
                            <h4>Notifications</h4>
                            <div>
                                <div class='mock-message'>
                                    <div class='mock-message__user'>
                                        <img src='https://avatars2.githubusercontent.com/u/61853891?s=64&v=4' />
                                        <span class='mock-message__user--desc'>
                                            <h5><a href="#" title="View message">Nice to see you</a></h5>
                                            <span>From System, 16 hours ago</span>
                                        </span>
                                    </div>    
                                </div>
                                <a href="#" class="more-link">All unread messages →</a>
                            </div>

                            <div>
                                <div class='mock-message'>
                                    <div class='mock-message__group'>
                                        <img src='https://i.imgur.com/1sEV4w1.jpg' />
                                        <span class='mock-message__group--desc'>
                                            <h5><a href="#" title="View message">Homegrown</a></h5>
                                            <span>Neil Young</span>
                                            <p>FLAC / 24bit Lossless / WEB / 2020</p>
                                        </span>
                                    </div>    
                                </div> 
                                <div class='mock-message'>
                                    <div class='mock-message__group'>
                                        <img src='https://i.imgur.com/1sEV4w1.jpg' />
                                        <span class='mock-message__group--desc'>
                                            <h5><a href="#" title="View message">Homegrown</a></h5>
                                            <span>Neil Young</span>
                                            <p>MP3 / V0 / WEB / 2020</p>
                                        </span>
                                    </div>    
                                </div> 
                                <a href="#" class="more-link">All torrent notifications →</a>
                            </div>

                        </div>
                </aside>
            </div>

    </div>
</body>
</html>