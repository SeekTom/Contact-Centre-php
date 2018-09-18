# Contact-Centre Version 0.5

Inbound PSTN to Twilio Client Contact Centre Powered by Taskrouter 

Languages: php, js

This implements:

- Single channel (Voice)
- 4 department, multilingual contact centre
- Agent UI based on TaskRouter SDK for low latency
- Twilio Client WebRTC dashboard
- Conference instruction
- Call instruction
- Conference recording
- Call holding
- Call transfers

## Setup
1. Setup a new TwiML App https://www.twilio.com/console/voice/twiml/apps and point it to the domain where you deployed this app (add `/incoming_call` suffix): `https://YOUR_DOMAIN_HERE/incoming_call`
2. Buy a Twilio number https://www.twilio.com/console/phone-numbers/incoming
3. Configure your number to point towards this TwiML App (Voice: Configure With: TwiML App)
4. Update the env variables in the following pages of /views to use your Twilio Credentials:
- agent_desktop.php
- agent_list.php
- call_mute.php
- call_transfer.php
- enqueue_call.php



