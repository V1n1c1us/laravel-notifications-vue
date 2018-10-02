export default {
    state: {
        items: []
    },
    mutations: {
        LOAD_NOTIFICATION (state, notifications) {
            state.items = notifications
        },
        MARK_AS_READ (state, id) {
            let index = state.items.filter(notification => notification.id == id)
            state.items.splice(index, 1)
        }
    },
    actions: {
        loadNotifications (context) {
            axios.get('/notifications')
                 .then(response => {
                    context.commit('LOAD_NOTIFICATION', response.data.notifications)
                 })
        },
        markAsRead (context, params) {
            axios.put('/notification-read', params)
                 .then(() => context.commit('MARK_AS_READ', params.id))
        }
    }
}
