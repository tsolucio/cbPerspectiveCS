# cbPerspectiveCS
coreBOS Perspective Changeset Loader template

The coreBOS Perspective changeset loader is an extension for distributing [coreBOS updater changesets](http://corebos.org/documentation/doku.php?id=en:devel:corebosupdater). It gives the developer the infrastructure to simply create the set of changesets that need to be applied and distribute and apply them easily into any existing coreBOS application.

Once defined the .xml change file and created all the changesets you can send this extension to any coreBOS application or include it as part of a perspective, to have the changes applied.

Ideally you will create one of these extensions for your perspective in such a way that it will require first for all the new modules to be installed and then, the last one will be this extension which will apply the final changes to get all the functionality into place.

You can get more information on coreBOS Updater, changesets and perspectives on the [coreBOS wiki](http://corebos.org/documentation) and/or asking in [the forums](https://plus.google.com/communities/109845486286232591652).
