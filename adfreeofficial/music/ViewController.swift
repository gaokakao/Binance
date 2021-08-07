import UIKit
import AVFoundation
import MediaPlayer


class ViewController: UIViewController, UITableViewDelegate, UITableViewDataSource {

    

    
    override func viewDidLoad()
{

    super.viewDidLoad()


    
        MPMusicPlayerController.systemMusicPlayer.beginGeneratingPlaybackNotifications()
    NotificationCenter.default.addObserver(self, selector: #selector(self.DainaPasikeite), name:NSNotification.Name.MPMusicPlayerControllerNowPlayingItemDidChange, object: nil)
    NotificationCenter.default.addObserver(self, selector: #selector(self.GrojimoBuklePasikete), name:NSNotification.Name.MPMusicPlayerControllerPlaybackStateDidChange, object: nil)

    _ = Timer.scheduledTimer(timeInterval: 0.1, target: self, selector: #selector(songPlayed), userInfo: nil, repeats: true)

    
    mp.setQueue(with: .songs())
    mp.repeatMode = .all
    mp.shuffleMode = .songs
    
    
    

    
    

    


}
    
    // kintamieji
    
    
    var     mp  =  MPMusicPlayerApplicationController.applicationQueuePlayer
    var     CurrentSong     = "Start Playing Bitches!"


    var     CurrentSongPosition: Double = 0.0000
    var     Songs           = [[String]]()
    var     Times           = [String]()
    var     Action          =  "Play"
    var     Awesome            =  false


    
    
    

    
    
    
    

    
    

    
    
    
    
    
    
    
    


    
    
    
    
    
    
    
    
    
    
    
    
    // Observer - Playback State Changed
    @objc func GrojimoBuklePasikete()
{
    print ("State Changed")
}
//  End  Playback State Changed Observer

    
    
    
    
    
    
    //   Playback Item Changed Observer
    @objc func DainaPasikeite()
{
    
    print ("Item Changed")
    
        let nowPlayingItem : MPMediaItem? = mp.nowPlayingItem
        if nowPlayingItem != nil
        {
        
            if nowPlayingItem?.artist != nil
            {
            
            let SongArtist = nowPlayingItem?.artist!
            let SongTitle = nowPlayingItem?.title!
            let CurrentSong = SongArtist! + " - " + SongTitle!
            Songs.append([SongArtist!, SongTitle!])
            Song.text = CurrentSong
            }
                
            else
            {
                
            let    SongArtist = "Neivestas"
            let    SongTitle = "Neivestas"
            let CurrentSong = SongArtist + " - " + SongTitle
            Song.text = CurrentSong
            Songs.append([SongArtist, SongTitle])
            }
                

                
                }
        
        SendSong()
        Action = "Play"

        Awesome = false
        Like.backgroundColor = UIColor.black


}
    //  End  Playback  Item Changed Observer
    

    
    
    
    
    
    
    
    
    
    
    

    
    
    
    // Timer every second to check if song has successfully played
    
@objc func songPlayed()
{

    
    let nowPlayingItem : MPMediaItem? = mp.nowPlayingItem
    
    if nowPlayingItem != nil
    {
        let SongLength =  nowPlayingItem?.playbackDuration
        let CurrentTime  = mp.currentPlaybackTime
        CurrentSongPosition = CurrentTime   / ( SongLength! / 100 )
        
        let positon:String = String(format:"%f", CurrentSongPosition.rounded(.up))
        Times.append(positon)
        Time.text =  positon  + " %"
        
// Slider Update
    slider.minimumValue = 0
    slider.maximumValue = Float(SongLength!)
    slider.value = Float(CurrentTime)
    }















    
    
    


























}
// End Of SongPlayed
// End Of Timer every second to check if song has successfully played

 
























// Table View




// Set up a basic Song query+
let SongQuery = MPMediaQuery.songs()

// This chunk handles the TableView Index

    //create index title

func sectionIndexTitlesForTableView(tableView: UITableView) -> [String]?
{
   let sectionIndexTitles = SongQuery.itemSections!.map { $0.title }
return sectionIndexTitles

    
}

    func tableView(_ tableView: UITableView, sectionForSectionIndexTitle title: String, at index: Int) -> Int
{
    return index
}

// This chunk sets up the table Sections and Headers
    func tableView(_ tableView: UITableView, titleForHeaderInSection section: Int) -> String?
{
let tarpas  = " "
return tarpas
//    return (SongQuery.itemSections![section].title)
}

func numberOfSectionsInTableView(tableView: UITableView) -> Int
{
    return (SongQuery.items?.count)!
//    return (SongQuery.itemSections?.count)!
}

// Get the number of rows per Section - YES SECTIONS EXIST WITHIN QUERIES
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int
{

    return (SongQuery.items?.count)!
}


// Set the cell in the table
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell
{


    let cell:UITableViewCell = UITableViewCell(style: UITableViewCell.CellStyle.subtitle, reuseIdentifier: "cell")

let currLoc = SongQuery.collectionSections![indexPath.section].range.location
let rowItem = SongQuery.collections![indexPath.row + currLoc]
//Main text is Artist
cell.detailTextLabel!.text = rowItem.items[0].artist
// Detail text is Title
// cell.textLabel!.text = rowItem.items[0].title
cell.detailTextLabel!.text = rowItem.items[0].title
    return cell
}


    func tableView(_ tableView: UITableView, didSelectRowAt indexPath: IndexPath)
{
    let currLoc = SongQuery.collectionSections![indexPath.section].range.location
    mp.setQueue(with: SongQuery.collections![indexPath.row + currLoc])
    mp.repeatMode = .all
    mp.shuffleMode = .songs
    mp.play()
}




















































    
    
    
    
    
    
// Buttons & Labels





    @IBOutlet weak var Like: UIButton!
    
    @IBAction func PressLike(_ sender: Any)
{
    if Awesome == false
    {
    Awesome = true
    Like.backgroundColor = UIColor.green
    }
    else
    {
    Awesome = false
    Like.backgroundColor = UIColor.black
    }
}








    @IBOutlet weak var slider: UISlider!
    
    
// Slider drag function and Song Position Change
    @IBAction func liderValueChanged(_ sender: UISlider, forEvent event: UIEvent)
{
    let nowPlayingItem : MPMediaItem? = mp.nowPlayingItem
    if nowPlayingItem != nil
    
    {
    
    let SongLength = Double(nowPlayingItem?.playbackDuration ?? 0.0)
    slider.minimumValue = 0
    slider.maximumValue = Float(mp.nowPlayingItem?.playbackDuration ?? 1.0)
    var newPozicija = slider.value
        if Float(newPozicija) >  Float(SongLength)
        {
        newPozicija = Float(SongLength-1)
        }
        if newPozicija < 0
        {
        newPozicija = 0.0
        }
        
    mp.currentPlaybackTime  = Double(newPozicija)
    }

}
// End Of  Slider drag function and Song Position Change






    
    
    @IBOutlet weak var Prev: UILabel!
    @IBOutlet weak var Song: UILabel!
    @IBOutlet weak var Time: UILabel!
    
    
    
    
@IBAction func playButton(_ sender: Any)
{
        if mp.playbackState != .playing
        {
            mp.play()
        }
}
    
    
    
@IBAction func pauseButton(_ sender: Any)
{
        if mp.playbackState == .playing
        {
        mp.pause()
        }
        else
        {
        mp.play()
        }
}
    
@IBAction func stopButton(_ sender: Any)
{
        mp.stop()
        mp.skipToBeginning()
}
    
    
    
    
@IBAction func Next(_ sender: Any)
{
    Action = "Next"
    mp.pause()
    mp.play()
    mp.skipToNextItem()
}

    
@IBAction func Prev(_ sender: Any)
{
        Action = "Prev"
    mp.pause()
    mp.play()
    mp.skipToPreviousItem()
}

    
// End of Buttons
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    

// Send Song info to Database
func SendSong()
{


    if Songs.count > 2
    {
        let element = Songs[Songs.count-2]

    let duration = Times[Times.count-1]

        if duration == "100"
        {
        Action = "Play"
        }
        
    var urlComponents = URLComponents()
    urlComponents.scheme = "https"
    urlComponents.host = "kakao.lt"
    urlComponents.path = ""
    urlComponents.queryItems = [
        URLQueryItem(name: "artist", value:element[0]),
        URLQueryItem(name: "title", value:element[1]),
        URLQueryItem(name: "action", value: Action),
        URLQueryItem(name: "likes", value: String(Awesome)),
        URLQueryItem(name: "duration", value: duration)
        
        ]
    let task = URLSession.shared.dataTask(with: (urlComponents.url?.absoluteURL)!)
        {
          (data, response, error) in
          if let error = error
          {
            print("error: \(error)")
          }
          else
          {
           if let response = response as? HTTPURLResponse
           {
            print("Satus Code: \(response.statusCode)")
            }
          if let data = data, let dataString = String(data: data, encoding: .utf8)
          {
           print("data: \(dataString)")
           print(" \(dataString)")
          }
          }
        }
        
    task.resume()

    
    }
    

    } // End of  Send Song Info  to Database
    















    














































    
    
    
    
}  //  End of Main class - File End :)
