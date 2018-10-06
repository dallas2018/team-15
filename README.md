# *SER Re-launch*
**SER Version 2.0**
**Objective** To increase engagement and improve outcomes for a local NGO by humanizing its application process.

## Stand-ups
- [x] (Team Collab 101) Ec2, git branch, Slack channels
- [x] (UI)Custom TypeForm
- [x] (UI)Landing Page
- [x] (UI)Success stories
- [ ] (UI)Save Forms


## Video Walkthrough
[Imgur](https://i.imgur.com/YSbZQpk.gif)

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Useful Links
- [Google Drive](https://drive.google.com/drive/folders/1P4z_fL-Z9N9C26eXp3SxL6rPmiktp5zt?usp=sharing)
- [Slack](https://join.slack.com/t/cfg-group15/shared_invite/enQtNDQ5ODQ5NzE2NzIwLTk2MjlkNmY4ZjhhOTNiMWYxOWY5ZDBlNzg3MTFhNDc2ZDA2YTEyZjcwY2I0ZjIyYzgxOTJlZGEzYmJmNjI0Njg) * click on 'channels' for ui / backend specific chit chat*
- [Set up Google Analytics](https://www.youtube.com/watch?v=mXcQ7rVn3ro)
- [Google Tag Manager](https://www.youtube.com/watch?v=WACCJaKPeGk)


## Roadblocks
- Trying to recreate TypeForm, we wanted to seamlessly transition to the next question without the user "clicking" - trigger when the user hit enter. Solution:
    ```javascript
    onKeyDown="if(event.keyCode==13) location.href='#apply3';"
    ```

   Change `http://resources.infolinks.com/js/infolinks_main.js` to `//resources.infolinks.com/js/infolinks_main.js` or `httpS://resources.infolinks.com/js/infolinks_main.js`


## License
© 2018 Team 15

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
