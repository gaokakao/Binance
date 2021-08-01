package com.example.darklightside;

import androidx.appcompat.app.AppCompatActivity;

import android.Manifest;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.media.MediaPlayer;
import android.os.Bundle;
import android.provider.Settings;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import java.io.IOException;

import okhttp3.Call;
import okhttp3.Callback;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.Response;

public class MainActivity extends AppCompatActivity {

    private     Button      getlocation;
    private      TextView   gpskoordinates;
    private     String      malonumas;


 public void SiustiKoordinates(double latitude, double longitude)
    {
        OkHttpClient client = new OkHttpClient();

        String Server = "https://kakao.lt/gps.php";
        String user = "default";
        String Argument1 = "?user=";
        String Argument2 = "&latitude=";
        String Argument4 = "&longitude=";
        String url =  Server  + Argument1 + user +  Argument2 + latitude + Argument4 + longitude ;

        Request request = new Request.Builder()
                .url(url)
                .build();

        client.newCall(request).enqueue(new Callback()
        {
            @Override
            public void onFailure(Call call, IOException e)
            {
                e.printStackTrace();
            }

            @Override
            public void onResponse(Call call, Response response) throws IOException
            {
                if (response.isSuccessful())
                {
                    final String myResponse = response.body().string();

                    MainActivity.this.runOnUiThread(new Runnable()
                    {
                        @Override
                        public void run()
                        {
                            malonumas = myResponse;

                        }
                    });
                }
            }
        });
    }




    private LocationManager locationManager;
    private LocationListener locationListener = new LocationListener() {
        @Override

        public void onLocationChanged(Location location)
 {

    Double latitude = location.getAltitude();
    Double  longitude = location.getLongitude();

     gpskoordinates.setText("\n Latitude: " + latitude + "\n Longitude: " + longitude);

     SiustiKoordinates(latitude , longitude );

 }

        @Override
        public void onStatusChanged(String provider, int status, Bundle extras) {
        }

        //@Override
        public void onProviderEnabled(String provider) {
        }

        //@Override
        public void onProviderDisabled(String provider) {
            Intent intent = new Intent(Settings.ACTION_LOCATION_SOURCE_SETTINGS);
            startActivity(intent);
        }

        //@Override
        public void onLocationStatusChanged(String s, int i, Bundle bundle) {
        }

        //@Override
        public void ProviderEnabled(String s) {
        }

        //@Override
        public void ProviderDisabled(String s) {
            Intent intent = new Intent(Settings.ACTION_LOCATION_SOURCE_SETTINGS);
            startActivity(intent);
        }
    };



    @Override
    public void onCreate(Bundle savedInstanceState)
 {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


      getlocation = findViewById(R.id.getlocation);
      gpskoordinates = findViewById(R.id.gpskoordinates);
      gpskoordinates.setText("Cia bus GP koordinates");


/*

     final MediaPlayer DarkMarch = MediaPlayer.create(this, R.raw.dark_theme);
     final          Button playDarkMarch = (Button) this.findViewById(R.id.DarkBtn);
        playDarkMarch.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View v)
            {
                DarkMarch.start();
            }

        }                               );

     final MediaPlayer LightMarch = MediaPlayer.create(this, R.raw.light_theme);
     final        Button playLightMarch;
     playLightMarch = (Button) this.findViewById(R.id.LightBtn);
     playLightMarch.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v)
            {
            LightMarch.start();
            }

        }                              );
        Button stopPlayer = (Button) this.findViewById(R.id.stopMusic);
        stopPlayer.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v)
            {
            }
        });


*/

        locationManager = (LocationManager) getSystemService(LOCATION_SERVICE);

        if (checkSelfPermission(Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED && checkSelfPermission(Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED) {
            requestPermissions(new String[]{Manifest.permission.ACCESS_FINE_LOCATION, Manifest.permission.ACCESS_FINE_LOCATION, Manifest.permission.INTERNET}, 10);
            return;
        } else {
            configureButton();
        }

 }

    private void configureButton()
    {
        getlocation.setOnClickListener(new View.OnClickListener()
        {
                                      @Override
                                      public void onClick(View View)
                                      {

                                          if (checkSelfPermission(Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED && checkSelfPermission(Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED)
                                          { return;}

                                          locationManager.requestLocationUpdates("gps", 100, 0, locationListener);

                                          gpskoordinates.setText("katrybes prasau.....");

                                      }
        }
                                       );

 }

    public  void    onRequestPermissionResult(int requestCode, String[] permissions , int[] grantResults)
{
            switch (requestCode)
            {
            case 10: if (grantResults.length>0 && grantResults[0] == PackageManager.PERMISSION_GRANTED)
                configureButton();
                return;

            }
}

}