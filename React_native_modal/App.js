import {View, Text, TouchableOpacity, Image} from 'react-native';
import React, {useState} from 'react';
import Modal from 'react-native-modal';
import Icon from './assets/Icon/lock.png';

const App = () => {
  const [modal, setModal] = useState(false);
  return (
    <View style={{flex: 1}}>
      <TouchableOpacity
        style={{
          backgroundColor: '#4649FF',
          marginTop: '100%',
          height: 40,
          alignSelf: 'center',
          borderRadius: 10,
          width: 150,
          justifyContent: 'center',
        }}
        onPress={() => setModal(true)}>
        <Text style={{alignSelf: 'center', color: '#ffff', fontSize: 17}}>
          Activate
        </Text>
      </TouchableOpacity>
      <Modal isVisible={modal}>
        <View
          style={{
            backgroundColor: '#dddd',
            paddingHorizontal: 30,
            paddingVertical: 20,
            borderRadius: 20,
          }}>
          <View style={{justifyContent: 'center', alignItems: 'center'}}>
            <Image
              style={{
                width: 130,
                height: 130,
                borderWidth: 6,
                borderColor: '#dddd',
                borderRadius: 65,
                position: 'absolute',
                zIndex: 1,
              }}
              source={Icon}
            />
          </View>
          <Text
            style={{
              fontWeight: 'bold',
              fontSize: 15,
              alignSelf: 'center',
              marginTop: 60,
            }}>
            Activate the auto lock feature!
          </Text>
          <Text style={{alignSelf: 'center', marginTop: 20}}>
            Activate the automatic lock feature when you
          </Text>
          <Text style={{alignSelf: 'center'}}>
            {' '}
            want to turn off the cellphone
          </Text>
          <TouchableOpacity
            style={{
              backgroundColor: '#4649FF',
              marginTop: 30,
              height: 40,
              alignSelf: 'center',
              borderRadius: 10,
              width: 150,
              justifyContent: 'center',
            }}
            onPress={() => setModal(false)}>
            <Text style={{alignSelf: 'center', color: '#ffff', fontSize: 17}}>
              Activate
            </Text>
          </TouchableOpacity>
          <TouchableOpacity
            style={{
              backgroundColor: 'gray',
              marginTop: 10,
              height: 40,
              alignSelf: 'center',
              borderRadius: 10,
              width: 150,
              justifyContent: 'center',
            }}
            onPress={() => setModal(false)}>
            <Text style={{alignSelf: 'center', color: '#ffff', fontSize: 17}}>
              Close
            </Text>
          </TouchableOpacity>
        </View>
      </Modal>
    </View>
  );
};

export default App;
