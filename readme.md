# SPA Vue App with Laravel

A basic boilerplate setup and example of an SPA (single page application) using Vue, Laravel, and Webpack. This also assumes a basic understanding Laravel and its webpack setup.  See "Technologies" below for information.

## Installation
Make sure that virtual machine and vagrant are installed.

Run the following command from within the directory the code is to be cloned
```
 git clone https://github.com/KainGNX/spa-vue-app.git

 ```

Then subsequently run for installing homestead
```
cd spa-vue-app

vendor/bin/homestead make
```

The default homstead install can remain, or changed as desired, or edit your `hosts` file to the preferred url. 
```
vagrant up

vagrant ssh
```

Be sure to change the directory where the code is within virutal machine, check `Homestead.yaml`
```
composer install

npm install

npm run dev
```

On windows vagrant it may be required to run
```
sudo npm install --global cross-env
```

### After installation

Navigate to you browser and enjoy, or open your IDE and start building. Enjoy!

### Development

From within the project root in the vagrant VM, run

```
npm run watch
```

### Where are the Vue files?

From the root of the app, simply look under `./resources/vue`

__Note:__ Using Vue, the examples within were intended to include an array or principles slightly beyond the basics, even if not practical within the scope of this repository, it shows what can be done, and potentially built upon.

#### Technologies
- [Laravel](https:/laravel.com)
- [Vue](https://vuejs.org)
- [Bootstrap](https://getbootstrap.com/)
- [Sass](https://sass-lang.com/)
- [Webpack](https://webpack.js.org/)


Feel free to make suggestions and contribrute, constructive feedback is very much appreciated.

_by Jason Horvath at [Greater Development](https://www.greaterdevelopment.com/)_
